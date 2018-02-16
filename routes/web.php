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

  Route::get('/author/{slug}', 'PagesController@authorProfile')->name('author.show');

  Route::resource('/categories', 'CategoryController', ['except' => 'create']);

  Route::resource('/tags', 'TagController', ['except' => 'create']);

  route::group(['middleware' => 'auth'], function(){

    Route::get('/profile', 'PagesController@profile')->name('profile.index');

    Route::get('/profile/setting', 'PagesController@setProfile')->name('profile.set');

    Route::post('/profile/setting', 'PagesController@updateAvatar')->name('profile.avatar');

    Route::post('/profile/setting/{id}', 'PagesController@updateProfile')->name('profile.update');

  });

});

// Route untuk blog
Route::group(['prefix' => '/post'], function(){

  Route::get('/', 'BlogController@blogIndex')->name('post.index');

  // Komentar
  Route::post('comments/{slug}', ['uses' => 'CommentController@store', 'as' => 'comments.store']);

  Route::delete('comments/{slug}', ['uses' => 'CommentController@destroy', 'as' => 'comments.destroy']);

  Route::group(['middleware' => 'auth'], function(){

      Route::get('/tulis', 'BlogController@ngepost');

      Route::post('/tulis', 'BlogController@posting');

      Route::get('/edit/{id}', 'BlogController@edit');

      Route::post('/edit/{id}', 'BlogController@update');

      Route::delete('/hapus/{id}', 'BlogController@hapus');

  });

  Route::get('/{slug}', 'BlogController@showPost')->name('post.show');

  Route::post('/search', 'BlogController@search');

});

// Route untuk gallery
Route::group(['prefix' => '/gallery'], function(){

    Route::get('/', 'AlbumsController@gallery')->name('gal.index');

    route::group(['middleware' => 'auth'], function(){

      Route::get('/create', 'AlbumsController@create')->name('gal.create');

      Route::post('/create', 'AlbumsController@store')->name('gal.store');

      Route::delete('/hapus/{id}', 'AlbumsController@delAlbum')->name('gal.destroy');

    });

    Route::get('/{id}', 'AlbumsController@show')->name('gal.show');
});

// Route untuk foto
Route::group(['prefix' => '/gallery/photos', 'middleware' => 'auth'], function(){

  Route::get('/create/{id}', 'PhotosController@create')->name('photo.create');

  Route::post('/create', 'PhotosController@store')->name('photo.store');

});
