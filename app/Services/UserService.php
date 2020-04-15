<?php

namespace App\Services;

use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class UserService extends BaseService
{
    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function findById(string $id)
    {
        return $this->repository->findById($id);
    }

    public function store($data)
    {
        $data['password'] = Hash::make($data['password']);
        return $this->repository->store($data);
    }
}

