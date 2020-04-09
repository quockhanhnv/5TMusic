<?php

Route::group(['namespace' => 'Client'], function() {
    Route::get('/','HomeController@index')->name('home');

    Route::get('khoa-hoc/{slug}', 'CourseController@show')->name('client.course.show');

});
