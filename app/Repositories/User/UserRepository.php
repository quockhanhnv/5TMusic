<?php

namespace App\Repositories\User;

use App\Repositories\BaseRepository;
use App\Models\User;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function model()
    {
        return User::class;
    }

    public function findById($id)
    {
        return $this->model->find($id);
    }

    public function withRelation($relation)
    {
        // TODO: Implement withRelation() method.
    }

    public function paginate($models, $itemPerPage)
    {
        // TODO: Implement paginate() method.
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function store($data)
    {
        return $this->model->fill($data)->save();
    }

    public function update($data, $id)
    {
        // TODO: Implement update() method.
    }
}
