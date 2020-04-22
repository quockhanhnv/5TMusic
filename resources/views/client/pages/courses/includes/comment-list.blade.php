<div class="comments-area">
    <ul class="comment-list">
        @foreach($comments as $comment)
            <li>
                <div class="media comment-author"> <a class="media-left pull-left flip" href="#"><img class="img-thumbnail" src="{{ asset('template/images/blog/comment1.jpg') }}" alt=""></a>
                    <div class="media-body">
                        <h5 class="media-heading comment-heading">{{ $comment->commentable_name }}</h5>
                        <div class="comment-date">{{ date('Y/m/d', strtotime($comment->created_at)) }}</div>
                        <p>{{ $comment->commentable_content }}</p>
                        <a class="replay-icon pull-right text-theme-colored2" href="#"> <i class="fa fa-commenting-o text-theme-colored2"></i> Trả lời</a> </div>
                </div>
            </li>
        @endforeach
        <li>{{ $comments->links() }}</li>
    </ul>
</div>
