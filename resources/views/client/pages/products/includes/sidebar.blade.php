<div class="col-md-3">
    <div class="sidebar sidebar-right mt-sm-30">
        <div class="widget">
            <h5 class="widget-title line-bottom">Search box</h5>
            <div class="search-form">
                <form action="" method="GET">
                    <div class="input-group">
                        <input type="text" name="name" placeholder="Tìm kiếm sản phẩm" value="{{ \Request::get('name') }}" class="form-control search-input">
                        <span class="input-group-btn">
                        <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="widget">
            <h5 class="widget-title line-bottom">Khóa Học</h5>
            <div class="categories">
                <ul class="list list-border angle-double-right">
                    @foreach($courses as $course) <!-- from view composers -->
                    <li><a href="{{ route('client.course.show', $course->course_slug .'-'. $course->id ) }}"><i class="fa fa-hand-o-right"></i> &nbsp{{ $course->course_name }} <span class="label label-danger">Hot</span></a> </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="widget">
            <h5 class="widget-title line-bottom">Tin Tức Nổi Bật</h5>
            <div class="latest-posts">
                @foreach($news as $new) <!-- from view composers -->
                <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb" href="{{ route('client.post.show', $new->post_slug .  '-' . $new->id) }}">
                        <img src="{{ $new->post_avatar }}" alt="" width="80">
                    </a>
                    <div class="post-right">
                        <h5 class="post-title mt-0">
                            <a href="{{ route('client.post.show', $new->post_slug .  '-' . $new->id) }}">
                                {{ \Illuminate\Support\Str::limit($new->post_name, 60) }}
                            </a>
                        </h5>
                    </div>
                </article>
                @endforeach
            </div>
        </div>

    </div>
</div>
