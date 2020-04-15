<?php

namespace App\Http\Controllers\Client;

use App\Services\CourseService;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    protected $courseService;

    public function __construct(CourseService $courseService)
    {
        $this->courseService = $courseService;
    }

    public function index()
    {

        $hotCourses = $this->courseService->getHotCourses(4);

        $viewData = [
            'hotCourses' => $hotCourses,
        ];

        return view('client.pages.home.index', $viewData);
    }
}
