<?php

namespace App\Repositories\Comment;

use App\Models\Comment;
use App\Repositories\BaseRepository;

class CommentRepository extends BaseRepository implements CommentRepositoryInterface
{
    public function model()
    {
        Comment::class;
    }

    public function withRelation($relation)
    {
        // TODO: Implement withRelation() method.
    }

    public function filter($models, $field, $operator, $value)
    {
        // TODO: Implement filter() method.
    }

    public function orderByField($models, $field, $orderBy)
    {
        // TODO: Implement orderByField() method.
    }

    public function paginate($models, $itemPerPage)
    {
        // TODO: Implement paginate() method.
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    public function store($data)
    {
        return $this->model->fill($data)->save();
    }
}
