<?php

use App\Livewire\CreatePost;
use App\Livewire\ListPosts;
use App\Livewire\ShowPost;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/create', CreatePost::class)->name('posts.create');
Route::get('/posts', ListPosts::class)->name('posts.list');
Route::get('/posts/{post}', ShowPost::class)->name('posts.show');
