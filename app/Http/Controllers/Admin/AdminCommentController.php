<?php

namespace App\Http\Controllers\Admin;

use App\Services\CommentService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminCommentController extends Controller
{
    protected $commentService;

    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }



    public function index(Request $request)
    {
        $comments = $this->commentService->withRelation('user');

        if($name = $request->name) $comments = $this->commentService->filter($comments, 'commentable_name', 'like', '%'.$name.'%');
        if($model = $request->model) $comments = $this->commentService->filter($comments,'commentable_type', '=', $model);
        if($content = $request->content_cmt) $comments = $this->commentService->filter($comments,'commentable_content', 'like', '%'.$content.'%');
        if($request->has('user_type') && $request->get('user_type') != 0) {
            $userType = $request->get('user_type');
            if($userType == 1) {
                $comments = $this->commentService->filter($comments,'commentable_user_id', '<>', 0);
            }
            else {
                $comments = $this->commentService->filter($comments,'commentable_user_id', '=', 0);
            }
        }
        $comments = $this->commentService->paginate($comments, 10);

        return view('admin.comments.index', compact('comments'));
    }

    public function delete($id)
    {
        $comment = $this->commentService->findById($id);
        if ($comment) $comment->delete();

        return redirect()->back();
    }

}
