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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::post('manager/tags/update', 'admin\TagController@update')->name('tags.update');
    Route::post('manager/tags/destroy', 'admin\TagController@destroy')->name('tags.destroy');
    Route::get('manager/tags/edit', 'admin\TagController@edit')->name('tags.edit');
    Route::post('manager/tags', 'admin\TagController@store')->name('tags.store');
    Route::get('manager/tags', 'admin\TagController@index')->name('tags.index');
    Route::post('manager/posts/update/', 'admin\PostController@update')->name('posts.update');
    Route::get('manager/posts/edit/{id}', 'admin\PostController@edit')->name('posts.edit');
    Route::get('manager/posts/edit','admin\PostController@edit');
    Route::post('manager/posts/destroy', 'admin\PostController@destroy');
    Route::get('manager/posts/read-data', 'admin\PostController@readData');
    Route::resource('admin', 'admin\AdminController');
    Route::get('manager/posts', 'admin\PostController@index')->name('posts.index');
    Route::post('manager/posts/store', 'admin\PostController@store')->name('posts.store')->middleware('can:post.create');
    Route::post('manager/ajax/getCategoriesChildren', 'admin\PostController@getCategoriesChildren');
});
