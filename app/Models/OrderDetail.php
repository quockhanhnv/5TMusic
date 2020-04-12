<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_details';

    protected $guarded = [];

    public $timestamps = true;

    public function product()
    {
        return $this->belongsTo(Product::class, 'order_detail_product_id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_detail_order_id');
    }
}
