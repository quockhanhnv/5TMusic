<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Services\UploadFileService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class AdminCategoryController extends Controller
{
    protected $uploadFileService;

    public function __construct(UploadFileService $uploadFileService) {
        $this->uploadFileService = $uploadFileService;
    }
    public function index()
    {
        $categories = Category::paginate(10);

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        $categories = $this->getCategoriesSort();
        return view('admin.categories.create', compact('categories'));
    }

    public function edit($id)
    {
        $category = Category::find($id);
        $categories = $this->getCategoriesSort();
        return view('admin.categories.update', compact('category','categories'));
    }

    public function store(Request $request)
    {
        $data               = $request->except('_token','c_avatar');
        $data['c_slug']     = Str::slug($request->c_name);
        $data['created_at'] = Carbon::now();
        if ($request->c_avatar) {
            $avatarPath = $this->uploadFileService->upload($file = $request->file('c_avatar'), 'category');
            $data['c_avatar'] = $avatarPath;
        }

        $id = Category::insertGetId($data);
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $category           = Category::find($id);
        $data               = $request->except('_token','c_avatar');
        $data['c_slug']     = Str::slug($request->c_name);
        $data['updated_at'] = Carbon::now();

        if ($request->c_avatar) {
            $avatarPath = $this->uploadFileService->upload($file = $request->file('c_avatar'), 'category');
            $data['c_avatar'] = $avatarPath;
        }

        $category->update($data);
        return redirect()->back();
    }

    public function active($id)
    {
        $category = Category::find($id);
        $category->c_status = ! $category->c_status;
        $category->save();

        return redirect()->back();
    }

    public function hot($id)
    {
        $category = Category::find($id);
        $category->c_hot = ! $category->c_hot;
        $category->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        $category = Category::find($id);
        if ($category) $category->delete();

        return redirect()->back();
    }

    protected function getCategoriesSort()
    {
        $categories = Category::where('c_status', Category::STATUS_ACTIVE)
            ->select('id', 'c_parent_id', 'c_name')->get();

        $listCategoriesSort = [];
        Category::recursive($categories, $listCategoriesSort, $parent = 0, $level = 1);
        return $listCategoriesSort;
    }
}
