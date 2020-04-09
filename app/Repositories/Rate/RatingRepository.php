<?php

namespace App\Repositories\Rate;

use App\Models\Rating;
use App\Repositories\BaseRepository;

class RatingRepository extends BaseRepository implements RatingRepositoryInterface
{

    public function model()
    {
        return Rating::class;
    }

    public function withRelation($relation)
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
}
