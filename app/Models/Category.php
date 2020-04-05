<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];
    const STATUS_ACTIVE = 1;
    const STATUS_HIDE = 0;

    public function children()
    {
        return $this->hasMany(self::class,'c_parent_id','id');
    }

    public static function recursive($categories, &$listCategoriesSort, $parent_id = 0, $level = 1)
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
