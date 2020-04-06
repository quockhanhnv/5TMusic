<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminProductRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminProductController extends Controller
{
    public function index()
    {
        return view('admin.products.index');
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin.products.create', compact('categories'));
    }

    public function store(AdminProductRequest $request)
    {
        dd($request->all());
    }
}
