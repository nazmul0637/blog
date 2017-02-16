<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::auth();

    Route::get('logout', 'Auth\LoginController@logout');
    Route::get('reset', 'Auth\ResetPasswordController@reset');


    Route::get('blog/index', ['as' => 'blog.index', 'uses' => 'BlogController@getIndex']);

    Route::get('blog/{slug}/', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])
        ->where('slug', '[\w\d\-\_]+');

    Route::get('contact', 'PagesController@getContact');


    Route::get('about', 'PagesController@getAbout');

    Route::get('/', 'PagesController@getIndex');

    Route::get('posts/pdf', 'PDFController@getPostPdf');

    Route::resource('posts', 'PostController');

    Route::post('store', 'PostController@store');
    Route::get('show/{id}', array('uses' => 'PostController@show', 'as' => 'showPost'));

});