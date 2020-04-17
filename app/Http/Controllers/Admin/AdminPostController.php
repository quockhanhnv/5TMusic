<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminPostRequest;
use App\Services\CategoryService;
use App\Services\CourseService;
use App\Http\Controllers\Controller;
use App\Services\PostService;
use App\Services\UploadFileService;
use Illuminate\Support\Facades\Log;

class AdminPostController extends Controller
{
    protected $postService;
    protected $uploadFileService;

    public function __construct(PostService $postService, UploadFileService $uploadFileService)
    {
        $this->postService = $postService;
        $this->uploadFileService = $uploadFileService;
    }

    public function index()
    {
        $posts = $this->postService->getAll();
        $posts = $this->postService->paginate($posts, 10);

        $viewData = [
            'posts' => $posts
        ];

        return view('admin.posts.index', $viewData);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(AdminPostRequest $request)
    {
        $data = $request->all();
        try {
            $this->postService->store($data);
            return redirect()->route('admin.post.index')->with('success', 'Tạo mới bài viết thành công');
        } catch (\Exception $exception) {
            Log::error('Something went wrong when insert post ' . $exception->getMessage());
            return redirect()->back()->withInput()->with('error', 'Xảy ra lỗi trong thao tác, vui lòng thử lại');
        }
    }

    public function edit($id)
    {
        $post = $this->postService->findById($id);

        return view('admin.posts.update', compact('post'));
    }

    public function update(AdminPostRequest $request, $id)
    {
        $data = $request->all();
        try {
            $this->postService->update($data, $id);
            return redirect()->route('admin.post.index')->with('success', 'Cập nhật bài viết thành công');
        } catch (\Exception $exception) {
            Log::error('Something went wrong when update course ' . $exception->getMessage());
            return redirect()->back()->withInput()->with('error', 'Xảy ra lỗi trong thao tác, vui lòng thử lại');
        }
    }

    public function active($id)
    {
        $post = $this->postService->findById($id);
        $post->post_active = ! $post->post_active;

        $post->save();

        return redirect()->back();
    }

    public function hot($id)
    {
        $post = $this->postService->findById($id);
        $post->post_hot = ! $post->post_hot;
        $post->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        $post = $this->postService->findById($id);
        if ($post) $post->delete();

        return redirect()->back();
    }
}
