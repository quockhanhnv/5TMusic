<?php

namespace App\Http\Controllers\Client;

use App\Services\CourseService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    protected $courseService;

    public function __construct(CourseService $courseService)
    {
        $this->courseService = $courseService;
    }

    public function index()
    {
        // return list courses
    }

    public function show($slug)
    {
        $arraySlug = explode('-', $slug);
        $id = array_pop($arraySlug);
        $course = $this->courseService->findById($id);

        return view('client.pages.courses.detail', compact('course'));
    }
}
