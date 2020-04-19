<?php

namespace App\Repositories\Reservation;

use App\Models\Reservation;
use App\Repositories\BaseRepository;

class ReservationRepository extends BaseRepository implements ReservationRepositoryInterface
{
    public function model()
    {
        return Reservation::class;
    }


    public function withRelation($model, $relation)
    {
        return $model->with($relation);
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
        return $models->where($field, $operator, $value);
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

    public function orderByField($field, $orderBy)
    {
        return $this->model->orderBy($field, $orderBy);
    }
}
