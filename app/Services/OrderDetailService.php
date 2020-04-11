<?php

namespace App\Services;

use App\Repositories\OrderDetail\OrderDetailRepositoryInterface;

class OrderDetailService extends BaseService
{
    protected $repository;

    public function __construct(OrderDetailRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function store($data)
    {
        return $this->repository->store($data);
    }
}
