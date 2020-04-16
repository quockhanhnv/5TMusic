<?php

namespace App\Repositories\Post;

use App\Models\Post;
use App\Repositories\BaseRepository;

class PostRepository extends BaseRepository implements PostRepositoryInterface
{

    public function model()
    {
        return Post::class;
    }

    public function withRelation($model, $relation)
    {
        // TODO: Implement withRelation() method.
    }

    public function paginate($models, $itemPerPage)
    {
        // TODO: Implement paginate() method.
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    public function filter($models, $field, $operator, $value)
    {
        // TODO: Implement filter() method.
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function store($data)
    {
        return $this->model->fill($data)->save();
    }

    public function update($data, $id)
    {
        // TODO: Implement update() method.
    }

    public function orderByField($field)
    {
        // TODO: Implement orderByField() method.
    }
}
