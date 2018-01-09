<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', function () {
    return redirect('blog.index');
});

Route::get('/tulis', function () {
    return redirect('blog.tulis');
});

Route::get('/', 'BlogController@index')->name('index');

Route::get('/{slug}', 'BlogController@showPost');

Route::get('/tulis', 'BlogController@tulisPost');

Route::post('/tulis/posting', 'BlogController@posting');

Route::post('/search', 'BlogController@search');
