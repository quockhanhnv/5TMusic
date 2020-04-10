<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class, 'course_category_id');
    }

        public function ratings()
    {
        return $this->hasMany(Rating::class, 'rating_course_id');
    }
}
