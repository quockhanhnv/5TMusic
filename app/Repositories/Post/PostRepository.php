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

    public function withRelation($relation)
    {
        return $this->model->with($relation);
    }

    public function paginate($models, $itemPerPage)
    {
        return $models->paginate($itemPerPage);
    }

    public function findById($id)
    {
        return $this->model->find($id);
    }

    public function filter($models, $field, $operator, $value)
    {
        // TODO: Implement filter() method.
    }

    public function getAll()
    {
        return $this->model->where('post_active', ACTIVE_STATUS);
    }

    public function store($data)
    {
        return $this->model->fill($data)->save();
    }

    public function update($data, $id)
    {
        return $this->model->find($id)->fill($data)->save();
    }

    public function orderByField($field)
    {
        // TODO: Implement orderByField() method.
    }

    public function getHotPosts($courseNumber)
    {
        return $this->model->limit($courseNumber)->get();
    }
}
