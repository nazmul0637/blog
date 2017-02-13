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

    //Authentication Routes
    Route::get('auth/login', 'Auth\LoginController@getLogin');
    Route::post('auth/login', 'Auth\LoginController@postLogin');
    Route::get('auth/logout', 'Auth\LoginController@getLogout');

    //Registration Routes
    Route::get('auth/register', 'Auth\RegisterController@getRegister');
    Route::post('auth/register', 'Auth\RegisterController@postRegister');


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