<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Order extends Model
{
    protected $guarded = [];

    protected $status = [
        '1' => [
            'class' => 'btn btn-primary',
            'name'  => 'Tiếp nhận'
        ],
        '2' => [
            'class' => 'btn btn-danger',
            'name'  => 'Đang vận chuyển'
        ],
        '3' => [
            'class' => 'btn btn-success',
            'name'  => 'Hoàn thành'
        ],
        '-1' => [
            'class' => 'btn btn-metal',
            'name'  => 'Đã Huỷ'
        ],
    ];

    public function getStatus()
    {
        return Arr::get($this->status, $this->order_status,"[N\A]");
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'order_user_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_details', 'order_detail_order_id');
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'order_detail_order_id');
    }
}
