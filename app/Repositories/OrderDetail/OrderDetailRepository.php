<?php

namespace App\Repositories\OrderDetail;

use App\Models\OrderDetail;
use App\Repositories\BaseRepository;

class OrderDetailRepository extends BaseRepository implements OrderDetailRepositoryInterface
{
    public function model()
    {
        return OrderDetail::class;
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
        return $this->model->insert($data);
    }

    public function update($data, $id)
    {
        // TODO: Implement update() method.
    }
}
