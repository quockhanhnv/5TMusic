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
        // TODO: Implement withRelation() method.
    }

    public function paginate($models, $itemPerPage)
    {
        // TODO: Implement paginate() method.
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
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
