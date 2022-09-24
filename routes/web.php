<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminPostsController;
use App\Http\Controllers\DashboardPostController;
use App\Models\adminposts;
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

// Route::get('/about', function () {
//     return view('about',[
//         'title' => 'About me',
//         'active'=> "about"
//     ]);
// });



Route::get('/', [PostController::class, 'index']);

// Route::get('/', function () {
//     return view('mainpage',[
//         'title' => 'Beranda',
//         'active' => 'home'
//     ]);
// });

Route::get('posts/{post:id}', [PostController::class, 'show']);

Auth::routes();

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');


// Route::get('/dashboard/posts/checkSlug', [AdminPostController::class, 'checkSlug'])->middleware('auth');
// Route::resource('/dashboard' ,AdminPostsController ::class)->middleware('auth');

Route::get('/dashboard/posts', [DashboardPostConrtroller::class, 'DashboardPostController@index '])->middleware('auth');
Route::resource('/dashboard/posts' ,DashboardPostController ::class)->middleware('auth');

Route::get('/home', [PostController::class, 'index'])->name('home');


