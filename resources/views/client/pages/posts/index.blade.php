@extends('client.layouts.layout')

@section('content')
    <!-- Section: Events Grid -->
    <section>
        <div class="container pt-70 pb-40">
            <div class="section-content">
                <div class="row multi-row-clearfix">
                    @foreach($posts as $post)
                    <div class="col-sm-6 col-md-4">
                        <article class="post clearfix mb-30">
                            <div class="entry-header">
                                <div class="post-thumb thumb">
                                    <img src="{{ $post->post_avatar }}" alt="" class="img-responsive img-fullwidth">
                                </div>
                                <div class="entry-date media-left text-center flip bg-theme-colored border-top-theme-colored2-3px pt-5 pr-15 pb-5 pl-15">
                                    <ul>
                                        <li class="font-16 text-white font-weight-600">{{ $post->created_at->format('d') }}</li>
                                        <li class="font-12 text-white text-uppercase">{{ $post->created_at->format('M') }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="entry-content p-15">
                                <div class="entry-meta media no-bg no-border mt-0 mb-10">
                                    <div class="media-body pl-0">
                                        <div class="event-content pull-left flip">
                                            <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5"><a href="{{ route('client.post.show', $post->post_slug.'-'.$post->id) }}">{{ Illuminate\Support\Str::limit($post->post_name, 50) }}</a></h4>
                                            <ul class="list-inline">
                                                <li><i class="fa fa-user-o mr-5 text-theme-colored2"></i>{{ $post->user->name ?? '5TGuitar' }}</li>
                                                <li><i class="fa fa-thumbs-o-up mr-5 text-theme-colored2"></i>Likes</li>
                                                <li><i class="fa fa-share-alt mr-5 text-theme-colored2"></i> 895 Likes</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-5">{{ Illuminate\Support\Str::limit($post->post_description, 130) }}</p>
                                <a class="btn btn-default btn-flat font-12 mt-10 ml-5" href="{{ route('client.post.show', $post->post_slug.'-'.$post->id) }}"> Xem chi tiết</a>
                            </div>
                        </article>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
