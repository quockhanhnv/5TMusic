<?php

namespace App\Http\Controllers\Admin;

use App\Models\Rating;
use App\Services\CourseService;
use App\Services\ProductService;
use App\Services\RatingService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminRatingController extends Controller
{
    protected $ratingService;
    protected $courseService;


    public function __construct(RatingService $ratingService, CourseService $courseService)
    {
        $this->ratingService = $ratingService;
        $this->courseService = $courseService;
    }

    public function index()
    {
        $ratings = $this->ratingService->withRelation(['course', 'user']);
        $ratings = $this->ratingService->paginate($ratings, 10);

        return view('admin.ratings.index', compact('ratings'));
    }

    public function delete($id)
    {
        $rating = $this->ratingService->findById($id);
        $this->courseService->findAndUpdateReviewTotal($rating->rating_star_number,$rating->rating_course_id, '-');
        if ($rating) $rating->delete();

        return redirect()->back();
    }
}
