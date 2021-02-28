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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>['auth']],function(){
    Route::get('/posts', 'App\Http\Controllers\ProductController@index')->name('post.index');
    Route::get('/posts/create', 'App\Http\Controllers\ProductController@create')->name('post.create');
    Route::post('/posts/store','App\Http\Controllers\ProductController@store')->name('post.store');
    Route::get('/posts/show', 'App\Http\Controllers\ProductController@show');
    Route::get('/posts/{edit}', 'App\Http\Controllers\ProductController@edit')->name('post.edit');
    Route::put('/posts/update','App\Http\Controllers\ProductController@update')->name('post.update');
    Route::delete('/posts/{destroy}', 'App\Http\Controllers\ProductController@destroy')->name('post.destroy');
    });
