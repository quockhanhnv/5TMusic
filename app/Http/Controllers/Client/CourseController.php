<?php

namespace App\Http\Controllers\Client;

use App\Models\Rating;
use App\Services\CourseService;
use App\Services\RatingService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    protected $courseService;
    protected $ratingService;

    public function __construct(CourseService $courseService, RatingService $ratingService)
    {
        $this->courseService = $courseService;
        $this->ratingService = $ratingService;
    }

    public function index()
    {
        $courses = $this->courseService->withRelation('category')->orderBy('created_at', 'desc');
        $courses = $this->courseService->paginate($courses, 5);

        return view('client.pages.courses.index', compact('courses'));
    }

    public function show($slug)
    {
        $arraySlug = explode('-', $slug);
        $id = array_pop($arraySlug);
        $course = $this->courseService->findById($id);
        // thống kê rating cho client
        $ratingsDefault = $this->ratingService->statisticReviewForClient($id);

        return view('client.pages.courses.detail', compact('course', 'ratingsDefault'));
    }

}
