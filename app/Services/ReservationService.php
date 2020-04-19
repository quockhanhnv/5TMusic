<?php

namespace App\Services;

use App\Mail\OrderSuccessfully;
use App\Mail\ReservedSuccessfully;
use App\Repositories\Reservation\ReservationRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReservationService extends BaseService
{
    protected $repository;
    protected $courseService;

    public function __construct(ReservationRepositoryInterface $repository, CourseService $courseService)
    {
        $this->repository =$repository;
        $this->courseService =$courseService;
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
        //for mailing to admin
        $courseName = $this->courseService->findById($data['reservation_course_id'])->course_name;
        Mail::to(ADMIN_EMAIL)->send(new ReservedSuccessfully($data, $courseName));
        // end mailing
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
