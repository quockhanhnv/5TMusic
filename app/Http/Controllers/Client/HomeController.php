<?php

namespace App\Http\Controllers\Client;

use App\Services\CourseService;
use App\Http\Controllers\Controller;
use App\Services\PostService;

class HomeController extends Controller
{
    protected $courseService;
    protected $postService;

    public function __construct(CourseService $courseService, PostService $postService)
    {
        $this->courseService = $courseService;
        $this->postService = $postService;
    }

    public function index()
    {

        $hotCourses = $this->courseService->getHotCourses(4);
        $hotPosts = $this->postService->getHotPosts(4);

        $viewData = [
            'hotCourses' => $hotCourses,
            'hotPosts' => $hotPosts,
        ];

        return view('client.pages.home.index', $viewData);
    }
}
