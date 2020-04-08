<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
          ['id' => 1, 'c_name' => 'Nhạc cụ', 'c_slug' => 'nhac-cu', 'c_avatar' => 'images/default-image.jpg', 'c_parent_id' => 0, 'c_hot' => 1, 'c_status' => 1],
          ['id' => 2, 'c_name' => 'Khóa học', 'c_slug' => 'khoa-hoc', 'c_avatar' => 'images/default-image.jpg', 'c_parent_id' => 0, 'c_hot' => 1, 'c_status' => 1],
          ['id' => 3, 'c_name' => 'Khóa học cơ bản', 'c_slug' => 'khoa-hoc-co-ban', 'c_avatar' => 'images/default-image.jpg', 'c_parent_id' => 2, 'c_hot' => 1, 'c_status' => 1],
          ['id' => 4, 'c_name' => 'Khóa học nâng cao', 'c_slug' => 'khoa-hoc-nang-cao', 'c_avatar' => 'images/default-image.jpg', 'c_parent_id' => 2, 'c_hot' => 1, 'c_status' => 1],
        ];
        DB::table('categories')->insert($categories);
    }
}
