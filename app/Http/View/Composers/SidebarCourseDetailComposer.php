<?php

namespace App\Http\View\Composers;

use App\Repositories\Course\CourseRepositoryInterface;
use Illuminate\View\View;

class SidebarCourseDetailComposer
{
    protected $courseRepository;

    public function __construct(CourseRepositoryInterface $courseRepository)
    {
        $this->courseRepository = $courseRepository;
    }

    public function compose(View $view)
    {
        $view->with('courses', $this->courseRepository->getHotCourses(3)); // course detail and footer
    }
}
