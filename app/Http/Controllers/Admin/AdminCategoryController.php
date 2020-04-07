<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminCategoryRequest;
use App\Services\CategoryService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class AdminCategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService) {
        $this->categoryService = $categoryService;
    }
    public function index()
    {
        $categories = $this->categoryService->withRelation('parent');
        $categories = $this->categoryService->paginate($categories, 10);

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        $categories = $this->categoryService->getCategoriesSort();

        return view('admin.categories.create', compact('categories'));
    }

    public function edit($id)
    {
        $category = $this->categoryService->findById($id);
        $categories = $this->categoryService->getCategoriesSort();

        return view('admin.categories.update', compact('category','categories'));
    }

    public function store(AdminCategoryRequest $request)
    {
        try {
            $this->categoryService->store($request->all());
            return redirect()->route('admin.category.index')->with('success', 'Tạo mới danh mục thành công');
        } catch (\Exception $exception) {
            Log::error('Something went wrong when insert category ' . $exception->getMessage());
            return redirect()->back()->withInput()->with('error', 'Xảy ra lỗi trong thao tác, vui lòng thử lại');
        }
    }

    public function update(AdminCategoryRequest $request, $id)
    {
        try {
            $this->categoryService->update($request->all(), $id);
            return redirect()->route('admin.category.index')->with('success', 'Cập nhật danh mục thành công');
        } catch (\Exception $exception) {
            Log::error('Something went wrong when update category ' . $exception->getMessage());
            return redirect()->back()->withInput()->with('error', 'Xảy ra lỗi trong thao tác, vui lòng thử lại');
        }
    }

    public function active($id)
    {
        $category = $this->categoryService->findById($id);
        $category->c_status = ! $category->c_status;

        $category->save();

        return redirect()->back();
    }

    public function hot($id)
    {
        $category = $this->categoryService->findById($id);
        $category->c_hot = ! $category->c_hot;
        $category->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        $category = $this->categoryService->findById($id);
        if ($category) $category->delete();

        return redirect()->back();
    }

}
