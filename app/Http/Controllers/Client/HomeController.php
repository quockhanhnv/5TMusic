<?php

namespace App\Http\Controllers\Client;

use App\Services\CourseService;
use App\Http\Controllers\Controller;
use App\Services\GalleryService;
use App\Services\PostService;

class HomeController extends Controller
{
    protected $courseService;
    protected $postService;
    protected $galleryService;

    public function __construct(CourseService $courseService, PostService $postService, GalleryService $galleryService)
    {
        $this->courseService = $courseService;
        $this->postService = $postService;
        $this->galleryService = $galleryService;
    }

    public function index()
    {

        $hotCourses = $this->courseService->getHotCourses(4); // for slider
        $hotPosts = $this->postService->getHotPosts(4);
        $courses = $this->courseService->getAll(); // for reservation form
        $galleryTypes = $this->galleryService->getTypesAttr();
        $gallerImages = $this->galleryService->getGalleriesForHomePage();



        $viewData = [
            'hotCourses' => $hotCourses,
            'hotPosts' => $hotPosts,
            'courses' => $courses,
            'galleryTypes' => $galleryTypes,
            'gallerImages' => $gallerImages,
        ];

        return view('client.pages.home.index', $viewData);
    }

}
