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

// Route untuk home
route::group(['prefix' => '/'], function(){

  Route::get('/', 'PagesController@beranda')->name('beranda');

  Route::get('/author/{slug}', 'PagesController@authorProfile');

  route::group(['middleware' => 'auth'], function(){

    Route::get('/profile', 'PagesController@profile');

    Route::get('/profile/setting', 'PagesController@setProfile');

    Route::post('/profile/setting', 'PagesController@updateAvatar');

    Route::post('/profile/setting/{id}', 'PagesController@updateProfile');

  });

});

// Route untuk blog
Route::group(['prefix' => '/post'], function(){

  Route::get('/', 'BlogController@blogIndex');

  Route::group(['middleware' => 'auth'], function(){

      Route::get('/tulis', 'BlogController@ngepost');

      Route::post('/tulis', 'BlogController@posting');

      Route::get('/edit/{id}', 'BlogController@edit');

      Route::post('/edit/{id}', 'BlogController@update');

      Route::delete('/hapus/{id}', 'BlogController@hapus');

      Route::resource('/categories', 'CategoryController', ['except' => 'create']);
  });

  Route::get('/{slug}', 'BlogController@showPost');

  Route::post('/search', 'BlogController@search');

});

// Route untuk gallery
Route::group(['prefix' => '/gallery'], function(){

    Route::get('/', 'AlbumsController@gallery');

    Route::get('/{id}', 'AlbumsController@show');

    route::group(['middleware' => 'auth'], function(){

      Route::get('/create', 'AlbumsController@create');

      Route::post('/create', 'AlbumsController@store');

      Route::delete('/hapus/{id}', 'AlbumsController@delAlbum');

    });
});

// Route untuk foto
Route::group(['prefix' => '/gallery/photos', 'middleware' => 'auth'], function(){

  Route::get('/create/{id}', 'PhotosController@create');

  Route::post('/create', 'PhotosController@store');

});
