<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
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
    $posts = Post::orderBy('id', 'DESC')->get();
    return view('welcome')->with("posts",$posts);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/admin/posts/post/{user}','App\Http\Controllers\Admin\PostController@store')->name('admin.posts.post');
Route::get('/posts/update/{id}','App\Http\Controllers\Admin\PostController@show')->name('admin.posts.edit');
Route::put('/posts/update/{id}','App\Http\Controllers\Admin\PostController@update')->name('admin.post.update');
Route::delete('/posts/destroy/{id}','App\Http\Controllers\Admin\PostController@destroy')->name('admin.posts.destroy');

