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
          ['id' => 5, 'c_name' => 'Khóa học cơ bản bậc 1', 'c_slug' => 'khoa-hoc-co-ban-bac-1', 'c_avatar' => 'images/default-image.jpg', 'c_parent_id' => 3, 'c_hot' => 1, 'c_status' => 1],
          ['id' => 6, 'c_name' => 'Khóa học cơ bản bậc 2', 'c_slug' => 'khoa-hoc-co-ban-bac-2', 'c_avatar' => 'images/default-image.jpg', 'c_parent_id' => 3, 'c_hot' => 1, 'c_status' => 1],
          ['id' => 7, 'c_name' => 'Khóa học nâng cao bậc 1', 'c_slug' => 'khoa-hoc-nang-cao-bac-1', 'c_avatar' => 'images/default-image.jpg', 'c_parent_id' => 4, 'c_hot' => 1, 'c_status' => 1],
          ['id' => 8, 'c_name' => 'Khóa học nâng cao bậc 2', 'c_slug' => 'khoa-hoc-nang-cao-bac-2', 'c_avatar' => 'images/default-image.jpg', 'c_parent_id' => 4, 'c_hot' => 1, 'c_status' => 1],
        ];
        DB::table('categories')->insert($categories);
    }
}
