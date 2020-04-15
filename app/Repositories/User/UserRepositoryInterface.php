<?php

namespace App\Repositories\User;

use App\Models\User;

interface UserRepositoryInterface
{
    public function withRelation($relation);

    public function paginate($models, $itemPerPage);

    public function findById($id);

    public function getAll();

    public function store($data);

    public function update($data, $id);
}
