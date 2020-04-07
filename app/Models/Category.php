<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function childrens()
    {
        return $this->hasMany(self::class,'c_parent_id','id');
    }

    public function parent()
    {
        return $this->belongsTo(self::class,'c_parent_id','id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'pro_category_id');
    }

    public function courses()
    {
        return $this->hasMany(Course::class, 'course_category_id');
    }

    public function recursive($categories, &$listCategoriesSort, $parent_id = 0, $level = 1)
    {
        if(count($categories) > 0 )
        {
            foreach ($categories as $key => $category) {
                if($category->c_parent_id  == $parent_id)
                {
                    $category->level = $level;
                    $listCategoriesSort[] = $category;
                    unset($categories[$key]);
                    $parent = $category->id;

                    self::recursive($categories ,$listCategoriesSort, $parent,$level + 1);
                }
            }
        }
    }
}
