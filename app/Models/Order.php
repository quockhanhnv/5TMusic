<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Order extends Model
{
    protected $guarded = [];

    protected $status = [
        RECEIVED_STATUS => [
            'class' => 'btn btn-primary',
            'name'  => RECEIVED_NAME
        ],
        DELIVERING_STATUS => [
            'class' => 'btn btn-danger',
            'name'  => DELIVERING_NAME
        ],
        FINISHED_STATUS => [
            'class' => 'btn btn-success',
            'name'  => FINISHED_NAME
        ],
        CANCELED_STATUS => [
            'class' => 'btn btn-metal',
            'name'  => CANCELED_NAME
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
