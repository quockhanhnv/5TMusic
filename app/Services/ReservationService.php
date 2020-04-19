<?php

namespace App\Services;

use App\Repositories\Reservation\ReservationRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationService extends BaseService
{
    protected $repository;

    public function __construct(ReservationRepositoryInterface $repository)
    {
        $this->repository =$repository;
    }

    public function withRelation($model, $relation)
    {
        return $this->repository->withRelation($model, $relation);
    }

    public function paginate($models, $itemPerPage)
    {
        return $this->repository->paginate($models, $itemPerPage);
    }

    public function findById($id)
    {
        return $this->repository->findById($id);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['reservation_time'] = date('Y-m-d', strtotime($data['reservation_time']));

        return $this->repository->store($data);
    }

    public function orderByField($field, $orderBy)
    {
        return $this->repository->orderByField($field, $orderBy);
    }

    public function filter($models, $field, $operator, $value)
    {
        return $this->repository->filter($models, $field, $operator, $value);
    }
}
