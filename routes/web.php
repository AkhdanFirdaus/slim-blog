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

Route::get('/', function () {
    return redirect('/blog');
});

Route::get('/blog/tulis', function () {
    return redirect('/blog/tulis');
});

Route::get('blog', 'BlogController@index');

Route::get('blog/{slug}', 'BlogController@showPost');

Route::get('blog/lihat/{id}', 'BlogController@lihatPost');

Route::get('blog/tulis', 'BlogController@tulisPost');

Route::post('/tulis/posting', 'BlogController@posting');

Route::get('mencari', 'BlogController@mencari');