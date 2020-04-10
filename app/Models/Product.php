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

    public function getCountry()
    {
        return Arr::get($this->provider, $this->pro_provider,"[N\A]");
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'pro_category_id');
    }

}
