@extends('client.layouts.layout')

@section('content')
    <!-- Section: Blog -->
    <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
            <div class="row">
                <div class="col-md-9 pull-right flip sm-pull-none">
                    <div class="blog-posts single-post">
                        <article class="post clearfix mb-0">
                            <div class="entry-header">
                                <div class="post-thumb thumb"> <img src="images/bg/bg2.jpg" alt="" class="img-responsive img-fullwidth"> </div>
                            </div>
                            <div class="entry-content">
                                <div class="entry-meta media no-bg no-border mt-15 pb-20">
                                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                                        <ul>
                                            <li class="font-16 text-white font-weight-600">{{ $post->created_at->format('d') }}</li>
                                            <li class="font-12 text-white text-uppercase">{{ $post->created_at->format('M') }}</li>
                                        </ul>
                                    </div>
                                    <div class="media-body pl-15">
                                        <div class="event-content pull-left flip">
                                            <h3 class="entry-title text-white text-uppercase pt-0 mt-0"><a href="blog-single-right-sidebar.html">{{ $post->post_name }}</a></h3>
                                            <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>
                                            <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-15">{{ $post->post_description }}</p>

                               {!! $post->post_content !!}
                            </div>
                        </article>
                        <div class="tagline p-0 pt-20 mt-5">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="tags">
                                        <p class="mb-0"><i class="fa fa-tags text-theme-colored"></i> <span>Tags:</span> Law, Juggement, lawyer, Cases</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="share text-right flip">
                                        <p><i class="fa fa-share-alt text-theme-colored"></i> Share</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="author-details media-post">
                            <a href="#" class="post-thumb mb-0 pull-left flip pr-20"><img class="img-thumbnail" alt="" src="images/blog/author.jpg"></a>
                            <div class="post-right">
                                <h5 class="post-title mt-0 mb-0"><a href="#" class="font-18">John Doe</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <ul class="styled-icons square-sm m-0">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="comments-area">
                            <h5 class="comments-title">Comments</h5>
                            <ul class="comment-list">
                                <li>
                                    <div class="media comment-author"> <a class="media-left" href="#"><img class="media-object img-thumbnail" src="images/blog/comment1.jpg" alt=""></a>
                                        <div class="media-body">
                                            <h5 class="media-heading comment-heading">John Doe says:</h5>
                                            <div class="comment-date">23/06/2014</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ea commodo consequat...</p>
                                            <a class="replay-icon pull-right flip text-theme-colored" href="#"> <i class="fa fa-commenting-o text-theme-colored"></i> Replay</a> </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media comment-author"> <a class="media-left" href="#"><img class="media-object img-thumbnail" src="images/blog/comment2.jpg" alt=""></a>
                                        <div class="media-body">
                                            <h5 class="media-heading comment-heading">John Doe says:</h5>
                                            <div class="comment-date">23/06/2014</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ea commodo consequat...</p>
                                            <a class="replay-icon pull-right flip text-theme-colored" href="#"> <i class="fa fa-commenting-o text-theme-colored"></i> Replay</a>
                                            <div class="clearfix"></div>
                                            <div class="media comment-author nested-comment"> <a href="#" class="media-left"><img class="media-object img-thumbnail" src="images/blog/comment3.jpg" alt=""></a>
                                                <div class="media-body p-20 bg-lighter">
                                                    <h5 class="media-heading comment-heading">John Doe says:</h5>
                                                    <div class="comment-date">23/06/2014</div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ea commodo consequat...</p>
                                                    <a class="replay-icon pull-right flip text-theme-colored" href="#"> <i class="fa fa-commenting-o text-theme-colored"></i> Replay</a>
                                                </div>
                                            </div>
                                            <div class="media comment-author nested-comment"> <a href="#" class="media-left"><img class="media-object img-thumbnail" src="images/blog/comment2.jpg" alt=""></a>
                                                <div class="media-body p-20 bg-lighter">
                                                    <h5 class="media-heading comment-heading">John Doe says:</h5>
                                                    <div class="comment-date">23/06/2014</div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ea commodo consequat...</p>
                                                    <a class="replay-icon pull-right flip text-theme-colored" href="#"> <i class="fa fa-commenting-o text-theme-colored"></i> Replay</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media comment-author"> <a class="media-left" href="#"><img class="media-object img-thumbnail" src="images/blog/comment2.jpg" alt=""></a>
                                        <div class="media-body">
                                            <h5 class="media-heading comment-heading">John Doe says:</h5>
                                            <div class="comment-date">23/06/2014</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ea commodo consequat...</p>
                                            <a class="replay-icon pull-right flip text-theme-colored" href="#"> <i class="fa fa-commenting-o text-theme-colored"></i> Replay</a> </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="comment-box">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h5>Leave a Comment</h5>
                                    <div class="row">
                                        <form role="form" id="comment-form">
                                            <div class="col-sm-6 pt-0 pb-0">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" required name="contact_name" id="contact_name" placeholder="Enter Name">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" required class="form-control" name="contact_email2" id="contact_email2" placeholder="Enter Email">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Enter Website" required class="form-control" name="subject">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <textarea class="form-control" required name="contact_message2" id="contact_message2"  placeholder="Enter Message" rows="7"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-dark btn-flat pull-right m-0" data-loading-text="Please wait...">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sidebar sidebar-left mt-sm-30">
                        <div class="widget">
                            <h5 class="widget-title line-bottom">Search box</h5>
                            <div class="search-form">
                                <form>
                                    <div class="input-group">
                                        <input type="text" placeholder="Click to Search" class="form-control search-input">
                                        <span class="input-group-btn">
                      <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                      </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="widget">
                            <h5 class="widget-title line-bottom">Categories</h5>
                            <div class="categories">
                                <ul class="list list-border angle-double-right">
                                    <li><a href="#">Creative<span>(19)</span></a></li>
                                    <li><a href="#">Portfolio<span>(21)</span></a></li>
                                    <li><a href="#">Fitness<span>(15)</span></a></li>
                                    <li><a href="#">Gym<span>(35)</span></a></li>
                                    <li><a href="#">Personal<span>(16)</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget">
                            <h5 class="widget-title line-bottom">Latest News</h5>
                            <div class="latest-posts">
                                <article class="post media-post clearfix pb-0 mb-10">
                                    <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0"><a href="#">Sustainable Construction</a></h5>
                                        <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
                                    </div>
                                </article>
                                <article class="post media-post clearfix pb-0 mb-10">
                                    <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0"><a href="#">Industrial Coatings</a></h5>
                                        <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
                                    </div>
                                </article>
                                <article class="post media-post clearfix pb-0 mb-10">
                                    <a class="post-thumb" href="#"><img src="https://placehold.it/75x75" alt=""></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0"><a href="#">Storefront Installations</a></h5>
                                        <p>Lorem ipsum dolor sit amet adipisicing elit...</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="widget">
                            <h5 class="widget-title line-bottom">Photos from Flickr</h5>
                            <div id="flickr-feed" class="clearfix">
                                <!-- Flickr Link -->
                                <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=52617155@N08">
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
