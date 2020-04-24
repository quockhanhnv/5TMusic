<?php

namespace App\Repositories\Comment;

use App\Models\Comment;
use App\Repositories\BaseRepository;

class CommentRepository extends BaseRepository implements CommentRepositoryInterface
{
    public function model()
    {
        return Comment::class;
    }

    public function withRelation($relation)
    {
        return $this->model->with($relation);
    }

    public function filter($models, $field, $operator, $value)
    {
        return $models->where($field, $operator, $value);
    }

    public function orderByField($model, $field, $orderBy)
    {
        return $model->orderBy($field, $orderBy);
    }

    public function paginate($models, $itemPerPage)
    {
        return $models->paginate($itemPerPage);
    }

    public function findById($id)
    {
        return $this->model->find($id);
    }

    public function store($data)
    {
        return $this->model->fill($data)->save();
    }
}
