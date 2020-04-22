<?php

namespace App\Http\Controllers\Client;

use App\Services\CourseService;
use App\Services\ProductService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    protected $courseService;
    protected $productService;

    public function __construct(CourseService $courseService, ProductService $productService)
    {
        $this->courseService = $courseService;
        $this->productService = $productService;
    }


    public function addCourseComment(Request $request)
    {
        if($request->ajax()) {
            $data = $request->except('_token');
            $userId = Auth::user()->id ?? 0;
            $data['commentable_user_id'] = $userId;

            $course = $this->courseService->findById($request->get('commentable_id'));

            $comment= $course->comments()->create($data);

            if($comment) {
                // để append dữ liệu khi vừa đánhg giá xong bằng js
                $html = view('client.pages.products.includes.separable-comment', compact('comment'))->render();

                return response()->json(
                    [
                        'status' => 200,
                        'type' => 'success', 'message' => 'Bình luận thành công',
                        'html' => $html ?? null
                    ]);
            }
            return response()->json(['status' => 200, 'type' => 'warning', 'message' => 'Xảy ra lỗi trong quá trình bình luận']);
        }
    }

    public function addProductComment(Request $request)
    {
        if($request->ajax()) {
            $data = $request->except('_token');
            $userId = Auth::user()->id ?? 0;
            $data['commentable_user_id'] = $userId;

            $product = $this->productService->findById($request->get('commentable_id'));

            $comment= $product->comments()->create($data);

            if($comment) {
                // để append dữ liệu khi vừa đánhg giá xong bằng js
                $html = view('client.pages.products.includes.separable-comment', compact('comment'))->render();

                return response()->json(
                    [
                        'status' => 200,
                        'type' => 'success', 'message' => 'Bình luận thành công',
                        'html' => $html ?? null
                    ]);
            }
            return response()->json(['status' => 200, 'type' => 'warning', 'message' => 'Xảy ra lỗi trong quá trình bình luận']);
        }
    }
}
