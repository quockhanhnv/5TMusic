<?php

namespace App\Repositories\OrderDetail;

interface OrderDetailRepositoryInterface
{
    public function withRelation($relation);

    public function paginate($models, $itemPerPage);

    public function findById($id);

    public function getAll();

    public function store($data);

    public function update($data, $id);
}
