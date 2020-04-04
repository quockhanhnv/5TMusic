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

    public function index()
    {
        return $this->model->all();
    }

}
