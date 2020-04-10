<?php

namespace App\Repositories\Rate;

use App\Models\Rating;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class RatingRepository extends BaseRepository implements RatingRepositoryInterface
{

    public function model()
    {
        return Rating::class;
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

    public function statisticReviewForClient($id)
    {
        return $this->model->groupBy('rating_star_number')
            ->where('rating_course_id', $id)
            ->select('rating_star_number',DB::raw('count(rating_star_number) as numberReview'), DB::raw('sum(rating_star_number) as total'))
            ->get()->toArray();
    }
}
