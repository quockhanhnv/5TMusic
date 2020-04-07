<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminCourseRequest;
use App\Services\CategoryService;
use App\Services\CourseService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class AdminCourseController extends Controller
{
    protected $courseService;
    protected $categoryService;

    public function __construct(CourseService $courseService, CategoryService $categoryService)
    {
        $this->courseService = $courseService;
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $courses = $this->courseService->withRelation('category');
        $courses = $this->courseService->paginate($courses, 10);

        $viewData = [
            'courses' => $courses
        ];

        return view('admin.courses.index', $viewData);
    }

    public function create()
    {
        $categories = $this->categoryService->getAll();

        return view('admin.courses.create', compact('categories'));
    }

    public function store(AdminCourseRequest $request)
    {
        try {
            $this->courseService->store($request->all());
            return redirect()->route('admin.course.index')->with('success', 'Tạo mới khóa học thành công');
        } catch (\Exception $exception) {
            Log::error('Something went wrong when insert course ' . $exception->getMessage());
            return redirect()->back()->withInput()->with('error', 'Xảy ra lỗi trong thao tác, vui lòng thử lại');
        }
    }

    public function edit($id)
    {
        $course = $this->courseService->findById($id);
        $categories = $this->categoryService->getAll();

        return view('admin.courses.update', compact('course', 'categories'));
    }

    public function update(AdminCourseRequest $request, $id)
    {
        try {
            $this->courseService->update($request->all(), $id);
            return redirect()->route('admin.course.index')->with('success', 'Cập nhật khóa thành công');
        } catch (\Exception $exception) {
            Log::error('Something went wrong when update course ' . $exception->getMessage());
            return redirect()->back()->withInput()->with('error', 'Xảy ra lỗi trong thao tác, vui lòng thử lại');
        }
    }

    public function active($id)
    {
        $course = $this->courseService->findById($id);
        $course->course_active = ! $course->course_active;

        $course->save();

        return redirect()->back();
    }

    public function hot($id)
    {
        $course = $this->courseService->findById($id);
        $course->course_hot = ! $course->course_hot;
        $course->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        $course = $this->courseService->findById($id);
        if ($course) $course->delete();

        return redirect()->back();
    }
}
