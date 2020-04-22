<?php

Route::group(['namespace' => 'Client'], function() {
    // ==================== Home =====================
    Route::get('/','HomeController@index')->name('home');
    Route::post('reservation', 'ReservationController@reservation')->name('reservation');

    //    =============== Courses ========================
    Route::get('khoa-hoc', 'CourseController@index')->name('client.course.index');
    Route::get('khoa-hoc/{slug}', 'CourseController@show')->name('client.course.show');
    Route::post('rating', 'RatingController@ratingCourse')->name('client.rating.course'); // send by ajax

    //    =============== Products ========================
    Route::get('san-pham','ProductController@index')->name('client.product.index');
//    Route::get('dan-muc/{slug}','CategoryController@index')->name('get.category.list');
    Route::get('san-pham/{slug}','ProductController@show')->name('client.product.show');
    //    =============== COMMON POST AND PRODUCT ========================
    Route::group(['prefix' => 'comments'], function(){
        Route::post('add-course-comment','CommentController@addCourseComment')->name('client.comment.add.course.cmt');
        Route::post('add-product-comment','CommentController@addProductComment')->name('client.comment.add.product.cmt');
    });
    // Shopping cart
    Route::get('don-hang','ShoppingCartController@index')->name('client.shopping.list');
    Route::group(['prefix' => 'shopping'], function(){
        Route::get('add/{id}', 'ShoppingCartController@add')->name('client.shopping.add');
        Route::get('update/{id}','ShoppingCartController@update')->name('client.shopping.update'); // update by ajax
        Route::get('delete/{id}','ShoppingCartController@delete')->name('client.shopping.delete');
        Route::post('pay','ShoppingCartController@postPay')->name('client.shopping.pay');
    });

    //    =============== Posts ========================
    Route::get('bai-viet', 'PostController@index')->name('client.post.index');
    Route::get('bai-viet/{slug}', 'PostController@show')->name('client.post.show');

});


Route::group(['namespace' => 'Auth'], function () {
    Route::get('dang-ky', 'RegisterController@getRegister')->name('client.register');
    Route::post('dang-ky', 'RegisterController@postRegister');

    Route::get('dang-nhap', 'LoginController@login')->name('login');
    Route::post('dang-nhap', 'LoginController@postLogin');

    Route::get('dang-xuat', 'LoginController@logout')->name('logout');
});
