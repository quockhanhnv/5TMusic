<?php

namespace App\Repositories\Comment;

interface CommentRepositoryInterface
{
    public function withRelation($relation);

    public function filter($models, $field, $operator, $value);

    public function orderByField($models, $field, $orderBy);

    public function paginate($models, $itemPerPage);

    public function findById($id);

    public function store($data);
}
