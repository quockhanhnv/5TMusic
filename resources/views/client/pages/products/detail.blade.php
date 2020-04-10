@extends('client.layouts.layout')

@section('content')
    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="images/bg/bg1.jpg">
            <div class="container pt-120 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-theme-colored2 font-36">Prouct Details</h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li class="active">Current Page</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="product">
                            <div class="col-md-5">
                                <div class="product-image">
                                    <ul class="owl-carousel-1col" data-nav="true">
                                        <li data-thumb="https://placehold.it/750x750"><a href="https://placehold.it/750x750" data-lightbox="single-product"><img src="../../../../../placehold.it/750x750.jpg" alt=""></a></li>
                                        <li data-thumb="images/construction/shop-single2.html"><a href="../../../../../placehold.it/750x750.jpg" data-lightbox="single-product"><img src="https://placehold.it/750x750" alt=""></a></li>
                                        <li data-thumb="https://placehold.it/750x750"><a href="https://placehold.it/750x750" data-lightbox="single-product"><img src="https://placehold.it/750x750" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="product-summary">
                                    <h2 class="product-title">Cordless Multi Screwdriver</h2>
                                    <div class="product_review">
                                        <ul class="review_text list-inline">
                                            <li>
                                                <div title="Rated 4.50 out of 5" class="star-rating"><span data-width="90%">4.50</span></div>
                                            </li>
                                            <li><a href="#"><span>2</span>Reviews</a></li>
                                            <li><a href="#">Add reviews</a></li>
                                        </ul>
                                    </div>
                                    <div class="price"> <del><span class="amount">$40.00</span></del> <ins><span class="amount">$30.00</span></ins> </div>
                                    <div class="short-description">
                                        <p>Donec volutpat purus tempor sem molestie, sed blandit lacus posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut posuere mollis nulla ut consectetur.</p>
                                    </div>
                                    <div class="tags"><strong>SKU:</strong> EA34</div>
                                    <div class="category"><strong>Category:</strong> <a href="#">Jackets</a>, <a href="#">Shirts</a></div>
                                    <div class="tags"><strong>Tags:</strong> <a href="#">Clothes</a>, <a href="#">Leather</a></div>
                                    <div class="cart-form-wrapper mt-30">
                                        <form enctype="multipart/form-data" method="post" class="cart">
                                            <input type="hidden" value="productID" name="add-to-cart">
                                            <table class="table variations no-border">
                                                <tbody>
                                                <tr>
                                                    <td class="name">Size</td>
                                                    <td class="value">
                                                        <select class="form-control">
                                                            <option value="">Choose an option...</option>
                                                            <option value="large">Large</option>
                                                            <option selected="selected" value="medium">Medium</option>
                                                            <option value="small">Small</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="name">Amount</td>
                                                    <td class="value">
                                                        <div class="quantity buttons_added">
                                                            <input type="button" class="minus" value="-">
                                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                                            <input type="button" class="plus" value="+">
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <button class="single_add_to_cart_button btn btn-default" type="submit">Add to cart</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="horizontal-tab product-tab">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab1" data-toggle="tab">Description</a></li>
                                        <li><a href="#tab2" data-toggle="tab">Additional Information</a></li>
                                        <li><a href="#tab3" data-toggle="tab">Reviews</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab1">
                                            <h3>Product Description</h3>
                                            <p>One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus voluptates nisi hic alias libero explicabo reiciendis sint ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae. One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus voluptates nisi hic alias libero explicabo reiciendis sint ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.</p>
                                            <p>One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus voluptates nisi hic alias libero explicabo reiciendis sint ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.</p>
                                        </div>
                                        <div class="tab-pane fade" id="tab2">
                                            <table class="table table-striped">
                                                <tbody>
                                                <tr>
                                                    <th>Brand</th>
                                                    <td><p>Envato</p></td>
                                                </tr>
                                                <tr>
                                                    <th>Color</th>
                                                    <td><p>Black</p></td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td><p>Large, Medium</p></td>
                                                </tr>
                                                <tr>
                                                    <th>Weight</th>
                                                    <td>27 kg</td>
                                                </tr>
                                                <tr>
                                                    <th>Dimensions</th>
                                                    <td>16 x 22 x 123 cm</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="tab3">
                                            <div class="reviews">
                                                <ol class="commentlist">
                                                    <li class="comment">
                                                        <div class="media"> <a href="#" class="media-left"><img class="thumb img-circle media-object" alt="" src="https://placehold.it/75x75" width="75"></a>
                                                            <div class="media-body">
                                                                <ul class="review_text list-inline mt-5">
                                                                    <li>
                                                                        <div title="Rated 5.00 out of 5" class="star-rating"><span  data-width="100%">5.00</span></div>
                                                                    </li>
                                                                    <li>
                                                                        <h5 class="media-heading meta"><span class="author">Tom Joe</span> – Mar 15, 2015:</h5>
                                                                    </li>
                                                                </ul>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat purus tempor sem molestie, sed blandit lacus posuere. Lorem ipsum dolor sit amet.</div>
                                                        </div>
                                                    </li>
                                                    <li class="comment">
                                                        <div class="media"> <a href="#" class="media-left"><img class="thumb img-circle media-object" alt="" src="https://placehold.it/75x75" width="75"></a>
                                                            <div class="media-body">
                                                                <ul class="review_text list-inline mt-5">
                                                                    <li>
                                                                        <div title="Rated 4.00 out of 5" class="star-rating"><span  data-width="80%">4.00</span></div>
                                                                    </li>
                                                                    <li>
                                                                        <h5 class="media-heading meta"><span class="author">Mark Doe</span> – Jan 23, 2015:</h5>
                                                                    </li>
                                                                </ul>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat purus tempor sem molestie, sed blandit lacus posuere. Lorem ipsum dolor sit amet.</div>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-30">
                            <h4>Related Products</h4>
                            <div class="products related owl-carousel-4col" data-nav="true">
                                <div class="item">
                                    <div class="product">
                                        <span class="tag-sale">Sale!</span>
                                        <div class="product-thumb"> <img alt="" src="https://placehold.it/260x194" class="img-responsive img-fullwidth">
                                            <div class="overlay"></div>
                                        </div>
                                        <div class="product-details text-center">
                                            <a href="#"><h5 class="product-title">Cordless Combi Drill</h5></a>
                                            <div class="star-rating" title="Rated 4.50 out of 5"><span data-width="90%">3.50</span></div>
                                            <div class="price"><del><span class="amount">$520.00</span></del><ins><span class="amount">$480.00</span></ins></div>
                                            <div class="btn-add-to-cart-wrapper">
                                                <a class="btn btn-default btn-xs btn-add-to-cart" href="#">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product">
                                        <div class="product-thumb"> <img alt="" src="https://placehold.it/260x194" class="img-responsive img-fullwidth">
                                            <div class="overlay"></div>
                                        </div>
                                        <div class="product-details text-center">
                                            <a href="#"><h5 class="product-title">Angle Grinders</h5></a>
                                            <div class="star-rating" title="Rated 5.00 out of 5"><span  data-width="100%">5.00</span></div>
                                            <div class="price"><del><span class="amount">$364.00</span></del><ins><span class="amount">$344.00</span></ins></div>
                                            <div class="btn-add-to-cart-wrapper">
                                                <a class="btn btn-default btn-xs btn-add-to-cart" href="#">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product">
                                        <span class="tag-sale">Hot!</span>
                                        <div class="product-thumb"> <img alt="" src="https://placehold.it/260x194" class="img-responsive img-fullwidth">
                                            <div class="overlay"></div>
                                        </div>
                                        <div class="product-details text-center">
                                            <a href="#"><h5 class="product-title">Planers</h5></a>
                                            <div class="star-rating" title="Rated 5.00 out of 5"><span  data-width="100%">3.90</span></div>
                                            <div class="price"><span class="amount">$245.00</span></div>
                                            <div class="btn-add-to-cart-wrapper">
                                                <a class="btn btn-default btn-xs btn-add-to-cart" href="#">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product">
                                        <div class="product-thumb"> <img alt="" src="https://placehold.it/260x194" class="img-responsive img-fullwidth">
                                            <div class="overlay"></div>
                                        </div>
                                        <div class="product-details text-center">
                                            <a href="#"><h5 class="product-title">Circular Saw</h5></a>
                                            <div class="star-rating" title="Rated 4.90 out of 5"><span  data-width="95%">4.60</span></div>
                                            <div class="price"><del><span class="amount">$490.00</span></del><ins><span class="amount">$475.00</span></ins></div>
                                            <div class="btn-add-to-cart-wrapper">
                                                <a class="btn btn-default btn-xs btn-add-to-cart" href="#">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product">
                                        <div class="product-thumb"> <img alt="" src="https://placehold.it/260x194" class="img-responsive img-fullwidth">
                                            <div class="overlay"></div>
                                        </div>
                                        <div class="product-details text-center">
                                            <a href="#"><h5 class="product-title">Angle Grinders</h5></a>
                                            <div class="star-rating" title="Rated 5.00 out of 5"><span  data-width="100%">5.00</span></div>
                                            <div class="price"><del><span class="amount">$364.00</span></del><ins><span class="amount">$344.00</span></ins></div>
                                            <div class="btn-add-to-cart-wrapper">
                                                <a class="btn btn-default btn-xs btn-add-to-cart" href="#">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product">
                                        <span class="tag-sale">Hot!</span>
                                        <div class="product-thumb"> <img alt="" src="https://placehold.it/260x194" class="img-responsive img-fullwidth">
                                            <div class="overlay"></div>
                                        </div>
                                        <div class="product-details text-center">
                                            <a href="#"><h5 class="product-title">Planers</h5></a>
                                            <div class="star-rating" title="Rated 5.00 out of 5"><span  data-width="100%">3.90</span></div>
                                            <div class="price"><span class="amount">$245.00</span></div>
                                            <div class="btn-add-to-cart-wrapper">
                                                <a class="btn btn-default btn-xs btn-add-to-cart" href="#">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->
@endsection
