<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Comment extends Model
{
    protected $guarded = [];

    public function commentable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'commentable_user_id');
    }

    public $modelType = [
        COURSE => "Khóa Học",
        PRODUCT => "Sản Phẩm",
    ];

    public function getModelType()
    {
        return Arr::get($this->modelType, $this->commentable_type,"[N\A]");
    }
}
