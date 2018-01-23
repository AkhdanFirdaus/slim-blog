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

Route::get('/', 'PagesController@beranda')->name('beranda');

Route::get('/profile', 'PagesController@profile');

Route::post('/profile', 'PagesController@updateAvatar');

Route::view('/blog/tulis', 'blog.tulis')->name('nulis');

Route::get('/blog', 'BlogController@blogIndex')->name('index');

Route::get('/blog/{slug}', 'BlogController@showPost');

Route::post('/blog/tulis/posting', 'BlogController@posting');

Route::post('/blog/search', 'BlogController@search');
