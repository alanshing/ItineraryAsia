<?php

use Illuminate\Support\Facades\Route;
use App\Models\Page;
use App\Models\Post;
use App\Models\User;

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

/*Backend*/
Route::get('/backend', [App\Http\Controllers\HomeController::class, 'backend'])->name('backend');
Route::resource('/backend/pages', App\Http\Controllers\backend\PagesController::class);
Route::resource('/backend/users', App\Http\Controllers\backend\UsersController::class);
Route::resource('/backend/posts', App\Http\Controllers\backend\PostsController::class);
Route::resource('/backend/tags', App\Http\Controllers\backend\TagsController::class)->except(['show']);
Route::resource('/backend/categories', App\Http\Controllers\backend\CategoriesController::class)->except(['show']);
Route::resource('/backend/advertisements', App\Http\Controllers\backend\AdvertisementsController::class);

/*Frontend*/
Route::get('/', [App\Http\Controllers\HomeController::class, 'frontend'])->name('frontend');
Route::resource('/author', App\Http\Controllers\frontend\UserController::class)->only(['index', 'show']);
Route::resource('/post', App\Http\Controllers\frontend\PostController::class)->only(['index', 'show']);
Route::resource('/tag', App\Http\Controllers\frontend\TagController::class)->only(['index', 'show']);
Route::resource('/category', App\Http\Controllers\frontend\CategoryController::class)->only(['index', 'show']);

/*Froala Editor*/
Route::post('/posts/imageUpload', [App\Http\Controllers\backend\PostsController::class, 'imageUpload'])->name('imageUpload');
Route::post('/posts/videoUpload', [App\Http\Controllers\backend\PostsController::class, 'videoUpload'])->name('videoUpload');
