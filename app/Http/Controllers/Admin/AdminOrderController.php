<?php

namespace App\Http\Controllers\Admin;

use App\Services\OrderDetailService;
use App\Services\OrderService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class AdminOrderController extends Controller
{
    protected $orderService;
    protected $orderDetailService;

    public function __construct(OrderService $orderService, OrderDetailService $orderDetailService)
    {
        $this->orderService = $orderService;
        $this->orderDetailService = $orderDetailService;
    }

    public function index()
    {
        $orders = $this->orderService->withRelation('user');
        $orders = $this->orderService->paginate($orders, 10);

        $viewData = [
            'orders' => $orders
        ];
        return view('admin.orders.index', $viewData);
    }

    public function delete($id) // xóa order thì xóa luôn order_details liên quan
    {
       $this->orderService->deleteOrderAndOrderDetails($id);

        return redirect()->back();
    }

    public function getOrderDetails(Request $request, $id)
    {
        if($request->ajax()) {
            $orderDetails = $this->orderDetailService->getOrderDetails($id);
            $html = view('admin.orders.includes.order-details', compact('orderDetails'))->render();
            return response([
                'html' => $html
            ]);
        }
    }

    // xóa 1 order_details thì phải trừ đi tiền của đơn hàng trong bảng orders đấy và giảm số lượt mua của product
    public function deleteOrderDetails(Request $request, $id)
    {
        if($request->ajax()) {
           $orderDetail = $this->orderDetailService->findById($id);
           $orderId = $orderDetail->order_detail_order_id;
           $decrementMoney = $orderDetail->order_detail_qty * getPriceSale($orderDetail->order_detail_price, $orderDetail->order_detail_sale);
           $this->orderService->findById($orderDetail->order_detail_order_id)->decrement('order_total_money', $decrementMoney);

           $orderDetail->delete();

            //kiểm tra nếu xóa hết order detail rồi thì xóa luôn order đấy vì làm gì còn sản phẩm nào đâu.Ok
            $checkOrderHaveAnyOrderDetails = $this->orderService->findById($orderId)->orderDetails->count();
            $flag_delete = $checkOrderHaveAnyOrderDetails == 0 ? true : false;
           return response([
               'orderId' => $orderId,
               'decrementMoney' => $decrementMoney,
               'flag_delete' => $flag_delete,
               'code' => Response::HTTP_OK
           ]);
        }
    }
}
