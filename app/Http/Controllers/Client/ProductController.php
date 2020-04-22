<?php

namespace App\Http\Controllers\Client;

use App\Services\ProductService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index(Request $request)
    {
        if($name = $request->name) { // search: đặt cùng tên $hotProducts để dùng chung view
            $hotProducts = $this->productService->findByName($name)->paginate(9);
        } else {
            $hotProducts =  $this->productService->getHotProducts()->paginate(9);
        }
        $query = $request->query();
        return view('client.pages.products.index', compact('hotProducts', 'query'));
    }

    public function show($slug)
    {
        $arraySlug = explode('-', $slug);
        $id = array_pop($arraySlug);
        $product = $this->productService->findById($id);

        // lấy ra tất cả comment của khóa học đó
        $comments = $product->comments()->paginate(20);

        return view('client.pages.products.detail', compact('product', 'comments'));
    }
}
