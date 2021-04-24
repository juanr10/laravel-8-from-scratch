<?php

use App\Models\Post;
use App\Models\Category;
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
    $posts = Post::with('category', 'user')->get();

    return view('posts.posts', compact('posts'));
})->name('posts');

Route::get('posts/{post:slug}', function (Post $post) {

    return view('posts.post', [
        'post' => $post
    ]);
})->name('post');

Route::get('categories/{category:slug}', function (Category $category) {

    return view('posts.posts', [
        'posts' => $category->posts
    ]);
})->name('categories');
