<?php

    Route::get('/', function () {
        return view('admin.dashboard.index');
    })->name('dashboard');


    Route::group(['prefix' => 'categories'], function(){
        Route::get('','AdminCategoryController@index')->name('admin.category.index');
        Route::get('create','AdminCategoryController@create')->name('admin.category.create');
        Route::post('create','AdminCategoryController@store');

        Route::get('update/{id}','AdminCategoryController@edit')->name('admin.category.update');
        Route::post('update/{id}','AdminCategoryController@update');

        Route::get('active/{id}','AdminCategoryController@active')->name('admin.category.active');
        Route::get('hot/{id}','AdminCategoryController@hot')->name('admin.category.hot');
        Route::get('delete/{id}','AdminCategoryController@delete')->name('admin.category.delete');

    });

    Route::group(['prefix' => 'products'], function(){
        Route::get('','AdminProductController@index')->name('admin.product.index');
        Route::get('create','AdminProductController@create')->name('admin.product.create');
        Route::post('create','AdminProductController@store');

        Route::get('update/{id}','AdminProductController@edit')->name('admin.product.update');
        Route::post('update/{id}','AdminProductController@update');

        Route::get('hot/{id}','AdminProductController@hot')->name('admin.product.hot');
        Route::get('active/{id}','AdminProductController@active')->name('admin.product.active');


        Route::get('delete/{id}','AdminProductController@delete')->name('admin.product.delete');
        Route::get('delete-image/{id}','AdminProductController@deleteImage')->name('admin.product.delete_image');
    });

    Route::group(['prefix' => 'courses'], function(){
        Route::get('','AdminCourseController@index')->name('admin.course.index');
        Route::get('create','AdminCourseController@create')->name('admin.course.create');
        Route::post('create','AdminCourseController@store');

        Route::get('update/{id}','AdminCourseController@edit')->name('admin.course.update');
        Route::post('update/{id}','AdminCourseController@update');

        Route::get('hot/{id}','AdminCourseController@hot')->name('admin.course.hot');
        Route::get('active/{id}','AdminCourseController@active')->name('admin.course.active');


        Route::get('delete/{id}','AdminCourseController@delete')->name('admin.course.delete');
        Route::get('delete-image/{id}','AdminCourseController@deleteImage')->name('admin.course.delete_image');
    });


//    ======================= COMMON ROUTE ==============================================
        Route::post('upload-content-images', 'AdminUploadController@uploadContentImages')->name('content-images-upload');

//   ====================== END COMMON ROUTE ===========================================


//    ===========Bengin Dropzone ==============
    Route::get('dropzone', function () {
        return view('admin.dashboard.dropzone');
    });
    Route::post('upload','AdminUploadController@upload')->name('upload');

    Route::post('delete/upload','AdminUploadController@remove')->name('delete-upload');
//    ===========End Dropzone ==============
    Route::get('/test', function () {
        return view('admin.dashboard.test-template');
    });

