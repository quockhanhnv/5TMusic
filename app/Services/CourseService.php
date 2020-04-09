<?php

namespace App\Services;

use App\Repositories\Course\CourseRepositoryInterface;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class CourseService extends BaseService
{
    protected $repository;
    protected $uploadFileService;

    public function __construct(CourseRepositoryInterface $repository, UploadFileService $uploadFileService)
    {
        $this->repository = $repository;
        $this->uploadFileService = $uploadFileService;
    }

    public function withRelation($relation)
    {
        return $this->repository->withRelation($relation);
    }

    public function paginate($models, $itemPerPage)
    {
        return $this->repository->paginate($models, $itemPerPage);
    }

    public function findById($id)
    {
        return $this->repository->findById($id);
    }

    public function store($data)
    {
        $data['course_slug'] = Str::slug($data['course_name']);
        if (isset($data['course_avatar'])) {
            $avatarPath = $this->uploadFileService->upload($data['course_avatar'], 'courses');
            $data['course_avatar'] = $avatarPath;
        }

        return $this->repository->store($data);
    }

    public function update($data, $id)
    {
        $data['course_slug'] = Str::slug($data['course_name']);

        if (isset($data['course_avatar'])) {
            $avatarPath = $this->uploadFileService->upload($data['course_avatar'], 'courses');
            $data['course_avatar'] = $avatarPath;
        }

        return $this->repository->update($data, $id);
    }

    // =============== client ==========
    public function getHotCourses($courseNumber)
    {
        return $this->repository->getHotCourses($courseNumber);
    }

    public function findAndUpdateReviewTotal($ratingStarNumber, $courseId)
    {
        return $this->repository->findAndUpdateReviewTotal($ratingStarNumber, $courseId);
    }
}
