<?php

namespace App\Http\Controllers\Client;

use App\Models\Rating;
use App\Services\CourseService;
use App\Services\RatingService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
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
        $courses = $this->courseService->withRelation(['category', 'comments'])->orderBy('created_at', 'desc');
        $courses = $this->courseService->paginate($courses, 5);

        return view('client.pages.courses.index', compact('courses'));
    }

    public function show(Request $request, $slug)
    {
        $arraySlug = explode('-', $slug);
        $id = array_pop($arraySlug);
        $course = $this->courseService->findById($id);
        // thống kê rating cho client
        $ratingsDefault = $this->ratingService->statisticReviewForClient($id);
        // lấy ra tất cả comment của khóa học đó
        $comments = $course->comments()->orderBy('created_at', 'desc')->paginate(5);

        if ($request->ajax()) { // phân trang bằng ajax
            $html = view('client.pages.courses.includes.comment-list', compact('comments'))->render();
            return response(['html' => $html ?? null]);
        }

        return view('client.pages.courses.detail', compact('course', 'ratingsDefault', 'comments'));
    }

}
