<?php

namespace App\Repositories\Category;

use App\Repositories\BaseRepository;
use App\Models\Category;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    public function model()
    {
        return Category::class;
    }

    public function paginate($itemPerPage)
    {
        return $this->model->paginate($itemPerPage);
    }

    public function findById($id)
    {
        return $this->model->find($id);
    }

    public function getAll()
    {
        return $this->model->where('c_status', Category::STATUS_ACTIVE)->get();

    }

    public function store($data)
    {
        return $this->model->fill($data)->save();
    }

    public function update($data, $id)
    {
        return $this->model->find($id)->fill($data)->save();
    }

    public function getRecursive($categories, &$listCategoriesSort, $parent_id = 0, $level = 1)
    {
        $categories = $this->getAll();
        $listCategoriesSort = [];
        $this->model->recursive($categories, $listCategoriesSort, $parent = 0, $level = 1); // method is defined in model
        return $listCategoriesSort;
    }



}
