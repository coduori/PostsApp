<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware(['cors'])->group(function () {
Route::post('/post/create/{user}','App\Http\Controllers\Admin\PostController@store')->name('admin.posts.post');
Route::get('/posts/{id}','App\Http\Controllers\Admin\PostController@show')->name('admin.posts.edit');
Route::get('/posts','App\Http\Controllers\Admin\PostController@index')->name('admin.posts.index');
Route::put('/posts/{id}','App\Http\Controllers\Admin\PostController@update')->name('admin.post.update');
Route::delete('/posts/destroy/{id}','App\Http\Controllers\Admin\PostController@destroy')->name('admin.posts.destroy');
});