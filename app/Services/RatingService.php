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
        return $this->repository->store($data);
    }

    // đánh giá sản phẩm xong thì tăng số lần review và số sao cho khóa học
    public function storeAndStatistic($data)
    {
        DB::transaction(function () use ($data) {
            $this->store($data);
            $this->courseService->findAndUpdateReviewTotal($data['rating_star_number'], $data['rating_course_id'], '+');
        });

    }

    public function statisticReviewForClient($id)
    {
        $ratingsClient = $this->repository->statisticReviewForClient($id);
        $ratingsDefault = $this->mapRatingDefault();
        foreach ($ratingsClient as $key => $item) // map giá trị mặc định nêu không có sẽ bằng 0 tránh lỗi ngoài view
        {
            $ratingsDefault[$item['rating_star_number']] = $item;
        }

        return $ratingsDefault;
    }
    private function mapRatingDefault()
    {
        $ratingDefault = [];
        for ($i = 1; $i <= 5; $i++) {
            $ratingDefault[$i] = [
                "rating_star_number" => 0,
                "numberReview" => 0,
                "total" => 0
            ];
        }
        return $ratingDefault;
    }
}
