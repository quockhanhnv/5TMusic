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

    public function index()
    {
        $hotProducts =  $this->productService->getHotProducts()->paginate(9);

        return view('client.pages.products.index', compact('hotProducts'));
    }

    public function show()
    {
        return view('client.pages.products.detail');
    }
}
