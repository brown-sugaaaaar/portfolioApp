<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/top' ,'TopController@index');
Route::get('/blog' ,'BlogController@index');
Route::get('/blog/{id}' ,'BlogController@show');


Route::get('/gallery' ,'GalleryController@index');

//admin
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/blog', 'AdminBlogController@index');
Route::get('/admin/blog/edit{id}', 'AdminBlogController@edit');
Route::post('/admin/blog/update{id}', 'AdminBlogController@update');
Route::get('/admin/blog/create', 'AdminBlogController@create');
Route::post('/admin/blog/store', 'AdminBlogController@store');
