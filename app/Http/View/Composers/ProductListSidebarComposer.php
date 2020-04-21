<?php

namespace App\Http\View\Composers;
use App\Repositories\Course\CourseRepositoryInterface;
use App\Repositories\Post\PostRepositoryInterface;
use Illuminate\View\View;

class ProductListSidebarComposer
{
    protected $courseRepository;
    protected $postRepository;

    public function __construct(CourseRepositoryInterface $courseRepository, PostRepositoryInterface $postRepository)
    {
        $this->courseRepository = $courseRepository;
        $this->postRepository = $postRepository;
    }

    public function compose(View $view)
    {
        $view->with('courses',
                    $this->courseRepository->getHotCourses(3))
             ->with('news',
                    $this->postRepository->getHotPosts(3));
    }

}
