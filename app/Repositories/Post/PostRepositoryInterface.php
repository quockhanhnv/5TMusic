<?php

namespace App\Repositories\Post;

interface PostRepositoryInterface
{
    public function withRelation($model, $relation);

    public function paginate($models, $itemPerPage);

    public function findById($id);

    public function filter($models, $field, $operator, $value);

    public function getAll();

    public function store($data);

    public function update($data, $id);

    public function orderByField($field);
}
