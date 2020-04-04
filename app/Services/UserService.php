<?php

namespace App\Services;

use App\Repositories\User\UserRepositoryInterface;

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

    public function index()
    {
        return $this->repository->index();
    }
}
