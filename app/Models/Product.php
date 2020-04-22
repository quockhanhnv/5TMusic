<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Product extends Model
{
    protected $guarded = [];


    public $provider = [
        "1" => "5TMusic",
        "2" => "Japan",
        "3" => "UK",
    ];

    public function getProvider()
    {
        return Arr::get($this->provider, $this->pro_provider,"[N\A]");
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'pro_category_id');
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_details', 'order_detail_product_id');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

}
