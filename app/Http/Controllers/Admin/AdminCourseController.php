<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminCourseRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminCourseController extends Controller
{
    public function index()
    {
        return view('admin.courses.index');
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin.courses.create', compact('categories'));
    }
}
