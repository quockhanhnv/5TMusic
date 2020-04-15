<?php

Route::group(['namespace' => 'Client'], function() {

    Route::get('/','HomeController@index')->name('home');

    Route::get('khoa-hoc/{slug}', 'CourseController@show')->name('client.course.show');

    Route::post('rating', 'RatingController@ratingCourse')->name('client.rating.course'); // send by ajax


    Route::get('san-pham','ProductController@index')->name('client.product.index');
//    Route::get('dan-muc/{slug}','CategoryController@index')->name('get.category.list');
    Route::get('san-pham/{slug}','ProductController@show')->name('client.product.show');

    // Shopping cart
    Route::get('don-hang','ShoppingCartController@index')->name('client.shopping.list');
    Route::group(['prefix' => 'shopping'], function(){
        Route::get('add/{id}', 'ShoppingCartController@add')->name('client.shopping.add');
        Route::get('update/{id}','ShoppingCartController@update')->name('client.shopping.update'); // update by ajax
        Route::get('delete/{id}','ShoppingCartController@delete')->name('client.shopping.delete');
        Route::post('pay','ShoppingCartController@postPay')->name('client.shopping.pay');
    });
});


Route::group(['namespace' => 'Auth'], function () {
    Route::get('dang-ky', 'RegisterController@getRegister')->name('client.register');
    Route::post('dang-ky', 'RegisterController@postRegister');

    Route::get('dang-nhap', 'LoginController@login')->name('login');
    Route::post('dang-nhap', 'LoginController@postLogin');

    Route::get('dang-xuat', 'LoginController@logout')->name('logout');
});
