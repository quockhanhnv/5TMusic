<?php

namespace App\Http\Controllers\Client;

use App\Services\PostService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        $posts = $this->postService->withRelation('user')->orderBy('created_at', 'desc');
        $posts = $this->postService->paginate($posts, 6);

        return view('client.pages.posts.index', compact('posts'));
    }

    public function show($slug)
    {
        $arraySlug = explode('-', $slug);
        $id = array_pop($arraySlug);
        $post = $this->postService->findById($id);

        return view('client.pages.posts.detail', compact('post'));
    }
}
