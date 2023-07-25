<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TechnologyController;
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

//posts routes
Route::get('posts', [PostController::class, 'index'])->name('posts.list');
Route::get('post/{slug}', [PostController::class, 'show'])->name('post.show');

//projects routes
Route::get('projects', [ProjectController::class, 'index'])->name('projects.list');
Route::get('project/{slug}', [ProjectController::class, 'show'])->name('project.show');

//tags routes
Route::get('tag/{slug}', [TagController::class, 'show'])->name('tag.show');

//categories routes
Route::get('technology/{slug}', [TechnologyController::class, 'show'])->name('category.show');
