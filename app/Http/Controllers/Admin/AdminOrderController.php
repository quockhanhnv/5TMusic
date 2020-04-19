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

    public function index(Request $request)
    {
        $orders = $this->orderService->orderByField('created_at', 'desc');
        if($name = $request->name) $orders = $this->orderService->filter($orders,'order_name', 'like', '%'.$name.'%');

        if($email = $request->email) $orders = $this->orderService->filter($orders,'order_email', 'like', '%'.$email.'%');

        if($request->has('user_type')) {
            $userType = $request->get('user_type');
            if($userType == 1) {
                $orders = $this->orderService->filter($orders,'order_user_id', '<>', 0);
            }
            else {
                $orders = $this->orderService->filter($orders,'order_user_id', '=', 0);
            }
        }
        if($status = $request->status) $orders = $this->orderService->filter($orders,'order_status', '=', $status);

        $orders = $this->orderService->withRelation($orders,'user');
        $orders = $this->orderService->paginate($orders, 10);

        $viewData = [
            'orders' => $orders,
            'query'  => $request->query()
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
           $this->orderService->findById($orderId)->decrement('order_total_money', $decrementMoney);

           $orderDetail->delete();

            //kiểm tra nếu xóa hết order detail rồi thì xóa luôn order đấy vì làm gì còn sản phẩm nào đâu.Ok
            $checkOrderHaveAnyOrderDetails = $this->orderService->findById($orderId)->orderDetails->count();
            $flag_delete = $checkOrderHaveAnyOrderDetails == 0 ? true : false;
            if($flag_delete == true) $this->orderService->findById($orderId)->delete();
           return response([
               'orderId' => $orderId,
               'decrementMoney' => $decrementMoney,
               'flag_delete' => $flag_delete,
               'code' => Response::HTTP_OK
           ]);
        }
    }

    public function changeStatus($action, $id)
    {
        $order = $this->orderService->findById($id);
        if ($order) {
            switch ($action) {
                case 'received':
                    $order->order_status = 1;
                    break;
                case 'process':
                    $order->order_status = 2;
                    break;
                case 'success':
                    $order->order_status = 3;

                    break;
                case 'cancel':
                    $order->order_status = -1;
                    # code...
                    break;
            }

            $order->save();
        }

        return redirect()->back();
    }
}
