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

Route::get('/', 'PostsController@index');

Route::get('admin', ['as' => 'admin.index', 'uses' => 'PostsAdminController@index']);

Route::get('admin/posts/create', ['as' => 'admin.post.create', 'uses' => 'PostsAdminController@create']);

Route::post('admin/posts/store', ['as' => 'admin.post.store', 'uses' => 'PostsAdminController@store']);

Route::get('admin/posts/edit/{id}', ['as' => 'admin.post.edit', 'uses' => 'PostsAdminController@edit']);

Route::put('admin/posts/update/{id}', ['as' => 'admin.post.update', 'uses' => 'PostsAdminController@update']);

Route::get('admin/posts/delete/{id}', ['as' => 'admin.post.delete', 'uses' => 'PostsAdminController@destroy']);

Route::get('admin/posts/view/{id}', ['as' => 'admin.post.view', 'uses' => 'PostsAdminController@view']);