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

    public function findById($id)
    {
        return $this->repository->findById($id);
    }

    public function store($data)
    {
        return $this->repository->store($data);
    }

    public function getOrderDetails($id)
    {
        return $this->repository->getOrderDetails($id);
    }

    public function deleteWithOrderId($id)
    {
        return $this->repository->deleteWithOrderId($id);
    }
}
