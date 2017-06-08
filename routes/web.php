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

Route::get('/', [
  'uses' => 'PostController@index',
  'as' => 'blog'
]);

Route::get('/about', [
  'uses' => 'CommonController@about',
  'as' => 'about'
]);

Route::get('/contact', [
  'uses' => 'CommonController@contact',
  'as' => 'contact'
]);

Route::get('/blog/{post}',[
  'uses' => 'PostController@show',
  'as' => 'blog.show'
]);

Route::get('/category/{category}',[
  'uses' => 'PostController@category',
  'as' => 'category'
]);
