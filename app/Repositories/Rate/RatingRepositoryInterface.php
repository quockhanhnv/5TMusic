<?php

namespace App\Repositories\Rate;

interface RatingRepositoryInterface
{
    public function withRelation($relation);

    public function paginate($models, $itemPerPage);

    public function findById($id);

    public function getAll();

    public function store($data);

    public function update($data, $id);
}
