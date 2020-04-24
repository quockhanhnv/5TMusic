<?php

namespace App\Services;

use App\Repositories\Comment\CommentRepositoryInterface;

class CommentService extends BaseService
{
    public function __construct(CommentRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function withRelation($relation)
    {
        return $this->repository->withRelation($relation);
    }

    public function filter($models, $field, $operator, $value)
    {
        return $this->repository->filter($models, $field, $operator, $value);
    }

    public function orderByField($model, $field, $orderBy)
    {
        return $this->repository->orderByField($model, $field, $orderBy);
    }

    public function paginate($models, $itemPerPage)
    {
        return $this->repository->paginate($models, $itemPerPage);
    }
}
