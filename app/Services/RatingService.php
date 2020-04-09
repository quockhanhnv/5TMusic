<?php

namespace App\Services;

use App\Repositories\Rate\RatingRepositoryInterface;
use Illuminate\Support\Facades\DB;

class RatingService
{
    protected $repository;
    protected $courseService;

    public function __construct(RatingRepositoryInterface $ratingRepository, CourseService $courseService)
    {
        $this->repository = $ratingRepository;
        $this->courseService = $courseService;
    }


    public function storeAndStatistic($data)
    {
        DB::transaction(function () use ($data) {
            $this->store($data);
            $this->courseService->findAndUpdateReviewTotal($data['rating_star_number'], $data['rating_course_id']);
        });

    }
    public function store($data)
    {
        return $this->repository->store($data);
    }
}
