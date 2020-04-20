<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Gallery extends Model
{
    protected $guarded = [];

    public $types = [
        '1' => 'Học viên',
        '2' => 'Trung tâm',
        '3' => 'Giáo viên',
        '4' => 'Đối tác'
    ];

    public function getType()
    {
        return Arr::get($this->types, $this->gallery_type,"[N\A]");
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'gallery_user_id');
    }
}
