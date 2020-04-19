<?php

namespace App\Repositories\Post;

interface PostRepositoryInterface
{
    public function withRelation($relation);

    public function paginate($models, $itemPerPage);

    public function findById($id);

    public function orderByField($field, $orderBy);

    public function filter($models, $field, $operator, $value);

    public function getAll();

    public function store($data);

    public function update($data, $id);

    public function getHotPosts($courseNumber);
}
