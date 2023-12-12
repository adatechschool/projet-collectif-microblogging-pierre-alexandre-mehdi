<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WallController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvideur and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/news', [PostController::class, 'getPosts'])->name('news');

Route::get('/wall/{userId}', [WallController::class, 'show'])->name('wall');



Route::get('/posts/{id}', [PostController::class, 'getPost']);

// Route::get('/wall', [PostController::class, 'create'])->name('post.create');

// Route::post('/wall/store', [PostController::class, 'store'])->name('post.store');

Route::get('/users', [UserController::class, 'getUsers']);

Route::get('/users/{id}/posts', [UserController::class, 'getPostsByUser']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
