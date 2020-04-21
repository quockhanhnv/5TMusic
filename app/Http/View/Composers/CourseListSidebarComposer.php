<?php

namespace App\Http\View\Composers;

use App\Repositories\Product\ProductRepositoryInterface;
use Illuminate\View\View;

class CourseListSidebarComposer
{
    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function compose(View $view) // data for course list and course detail
    {
        $view->with('products', $this->productRepository->getProductsForSidebar(5));
    }
}
