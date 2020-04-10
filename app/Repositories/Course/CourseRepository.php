<?php

namespace App\Repositories\Course;

use App\Models\Course;
use App\Repositories\BaseRepository;

class CourseRepository extends BaseRepository implements CourseRepositoryInterface
{

    public function model()
    {
        return Course::class;
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

    public function getAll()
    {
        return $this->model->where('c_status', ACTIVE_STATUS)->get();
    }

    public function store($data)
    {
        return $this->model->fill($data)->save();
    }

    public function update($data, $id)
    {
        return $this->model->find($id)->fill($data)->save();
    }

    public function getHotCourses($courseNumber)
    {
        return $this->model->with('category')->limit($courseNumber)->get();
    }

    public function findAndUpdateReviewTotal($ratingStarNumber, $courseId, $operator)
    {
        $course = $this->model->find($courseId);
        if($operator === '-')
        {
            $course->course_review_total--;
            $course->course_review_star -= $ratingStarNumber;

        } else {
            $course->course_review_total++;
            $course->course_review_star += $ratingStarNumber;
        }

        return $course->save();
    }


}
