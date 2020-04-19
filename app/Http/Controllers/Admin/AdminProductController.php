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
        $products = $this->productService->withRelation('category')->orderBy('created_at', 'desc');
        $products = $this->productService->paginate($products, 10);

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

    public function edit($id)
    {
        $product = $this->productService->findById($id);
        $categories = $this->categoryService->getAll();

        return view('admin.products.update', compact('product', 'categories'));
    }

    public function update(AdminProductRequest $request, $id)
    {
        try {
            $this->productService->update($request->all(), $id);
            return redirect()->route('admin.product.index')->with('success', 'Cập nhật sản phẩm thành công');
        } catch (\Exception $exception) {
            Log::error('Something went wrong when update product ' . $exception->getMessage());
            return redirect()->back()->withInput()->with('error', 'Xảy ra lỗi trong thao tác, vui lòng thử lại');
        }
    }

    public function active($id)
    {
        $product = $this->productService->findById($id);
        $product->pro_active = ! $product->pro_active;

        $product->save();

        return redirect()->back();
    }

    public function hot($id)
    {
        $product = $this->productService->findById($id);
        $product->pro_hot = ! $product->pro_hot;
        $product->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        $product = $this->productService->findById($id);
        if ($product) $product->delete();

        return redirect()->back();
    }
}
