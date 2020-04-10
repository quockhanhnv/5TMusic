<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $guarded = [];

    public function course()
    {
        return $this->belongsTo(Course::class, 'rating_course_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'rating_user_id', 'id');
    }
}
