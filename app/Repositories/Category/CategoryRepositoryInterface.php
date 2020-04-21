<?php

namespace App\Repositories\Category;


interface CategoryRepositoryInterface
{
    public function withRelation($relation);

    public function paginate($models, $itemPerPage);

    public function findById($id);

    public function getAll();

    public function store($data);

    public function update($data, $id);

    public function getRecursive($categories, &$listCategoriesSort, $parent_id = 0, $level = 1);

//    public function getPatentCategories();
}
