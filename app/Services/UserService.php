<?php

namespace App\Services;

use App\Repositories\User\CategoryRepositoryInterface;

class UserService extends BaseService
{
    public function __construct(CategoryRepositoryInterface $repository)
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
