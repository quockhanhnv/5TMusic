<?php

namespace App\Repositories\Order;

use App\Models\Order;
use App\Repositories\BaseRepository;

class OrderRepository extends BaseRepository implements OrderRepositoryInterface
{

    public function model()
    {
        return Order::class;
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

    public function getAll()
    {
        return $this->model->all();
    }

    public function store($data)
    {
        $this->model->fill($data)->save();
        return $this->model;
    }

    public function update($data, $id)
    {
        // TODO: Implement update() method.
    }
}
