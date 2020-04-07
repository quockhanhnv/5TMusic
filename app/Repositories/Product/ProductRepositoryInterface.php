<?php

namespace App\Repositories\Product;

interface ProductRepositoryInterface
{
    public function paginate($itemPerPage);

    public function findById($id);

    public function getAll();

    public function store($data);

    public function update($data, $id);
}
