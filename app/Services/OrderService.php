<?php

namespace App\Services;

use App\Repositories\Order\OrderRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class OrderService extends BaseService
{
    protected $repository;
    protected $orderDetailService;
    protected $productService;

    public function __construct(OrderRepositoryInterface $repository, OrderDetailService $orderDetailService, ProductService $productService)
    {
        $this->repository = $repository;
        $this->orderDetailService = $orderDetailService;
        $this->productService = $productService;
    }

    public function withRelation($relation)
    {
        return $this->repository->withRelation($relation);
    }

    public function paginate($models, $itemPerPage)
    {
        return $this->repository->paginate($models, $itemPerPage);
    }

    public function findById($id)
    {
        return $this->repository->findById($id);
    }

    public function store($data)
    {
        return $this->repository->store($data);
    }

    public function insertOrderAndOrderDetails($data)
    {
         return DB::transaction(function () use ($data) {

            $order = $this->store($data); // lưu vào bảng order thông tin khách hàng và tổng tiền

            $orderDetails = \Cart::content(); // lấy các sản phẩm trong giỏ hàng ra
             $data = [];

            foreach ($orderDetails as $key => $item) {
                // lưu các sản phẩm vào và có khóa ngoại order_id = $order->id vừa đk lưu ở bảng orders
                $data[$key]['order_detail_order_id'] = $order->id;
                $data[$key]['order_detail_product_id'] = $item->id;
                $data[$key]['order_detail_sale'] = $item->options->sale;
                $data[$key]['order_detail_qty'] = $item->qty;
                $data[$key]['order_detail_price'] = $item->options->original_price;
                $data[$key]['created_at'] = Carbon::now();

                // tăng số lượt mua của sản phẩm đó lên
                $this->productService->findById($item->id)->increment('pro_pay', $item->qty);

            }
            $data = array_values($data);
             $this->orderDetailService->store($data);
            \Cart::destroy();
        });
    }

    public function deleteOrderAndOrderDetails($id)
    {
        DB::transaction(function () use ($id) {
            $this->findById($id)->delete();
            $this->orderDetailService->deleteWithOrderId($id);
        });
    }
}
