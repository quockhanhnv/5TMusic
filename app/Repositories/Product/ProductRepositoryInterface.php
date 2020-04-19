<?php

namespace App\Repositories\Product;

interface ProductRepositoryInterface
{
    public function withRelation($relation);

    public function paginate($models, $itemPerPage);

    public function findById($id);

    public function findByName($name);

    public function orderByField($field, $orderBy);

    public function getAll();

    public function store($data);

    public function update($data, $id);

}
