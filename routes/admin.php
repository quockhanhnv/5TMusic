<?php

    Route::get('/', function () {
        return view('admin.dashboard.index');
    });


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

