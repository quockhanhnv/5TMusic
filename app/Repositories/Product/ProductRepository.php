<?php

namespace App\Repositories\Product;

use App\Models\Product;
use App\Repositories\BaseRepository;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    public function model()
    {
        return Product::class;
    }

    public function withRelation($relation)
    {
        return $this->model->with($relation);
    }
    public function paginate($models, $itemPerPage)
    {
        return $models->paginate($itemPerPage);
    }

    public function findById($id)
    {
        return $this->model->find($id);
    }

    public function orderByField($field, $orderBy)
    {
        return $this->model->orderBy($field, $orderBy);
    }

    public function findByName($name)
    {
        return $this->model->where('pro_active', ACTIVE_STATUS)->where('pro_name', 'like', '%' . $name . '%');
    }

    public function getAll()
    {
        return $this->model->where('pro_active', ACTIVE_STATUS);
    }

    public function store($data)
    {
        return $this->model->fill($data)->save();
    }

    public function update($data, $id)
    {
        return $this->model->find($id)->fill($data)->save();
    }

    public function getHotProducts()
    {
        return $this->model->where('pro_active', ACTIVE_STATUS);
    }

    public function getProductsForSidebar($numberProduct)
    {
        return $this->model->limit($numberProduct)->orderBy('created_at', 'desc')->get();
    }
}
