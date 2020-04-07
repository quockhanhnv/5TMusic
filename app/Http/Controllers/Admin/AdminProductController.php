<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminProductRequest;
use App\Models\Category;
use App\Services\CategoryService;
use App\Services\ProductService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class AdminProductController extends Controller
{
    protected $productService;
    protected $categoryService;

    public function __construct(ProductService $productService, CategoryService $categoryService)
    {
        $this->productService = $productService;
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $products = $this->productService->paginate(10);

        $viewData = [
          'products' => $products
        ];

        return view('admin.products.index', $viewData);
    }

    public function create()
    {
        $categories = $this->categoryService->getAll();

        return view('admin.products.create', compact('categories'));
    }

    public function store(AdminProductRequest $request)
    {
        try {
            $this->productService->store($request->all());
            return redirect()->route('admin.product.index')->with('success', 'Tạo mới sản phẩm thành công');
        } catch (\Exception $exception) {
            Log::error('Something went wrong when insert product ' . $exception->getMessage());
            return redirect()->back()->withInput()->with('error', 'Xảy ra lỗi trong thao tác, vui lòng thử lại');
        }
    }
}
