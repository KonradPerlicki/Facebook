<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\Ajax\LikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Models\Post;
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

require __DIR__.'/auth.php';

//main
Route::group(['middleware'=> ['verified', 'auth']], function(){
    Route::get('/', function () {return view('index', [
        'user' => auth()->user(),
        'posts' => Post::latest()->get()
    ]);})->name('home');

    //ajax
    Route::post('/like', [LikeController::class, 'manageLikes']);

    //profile
    Route::get('/profile/{user:username}', [ProfileController::class, 'show'])->name('profile');
    
    //post
    Route::post('/post',[PostController::class, 'store'])->name('post.create');
    Route::put('/post/{id}',[PostController::class, 'update'])->name('post.update');
    Route::delete('/post/{id}',[PostController::class, 'destroy'])->name('post.destroy');

    //settings
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
    Route::put('/settings', [SettingsController::class, 'update']);

    #Route::get('/pages', [PageController::class, 'index'])->name('pages');
    #Route::get('/videos', [VideoController::class, 'index'])->name('videos');
    Route::get('/groups', [GroupController::class, 'index'])->name('groups');
    Route::get('/courses', [CourseController::class, 'index'])->name('courses');
    #Route::get('/jobs', [JobController::class, 'index'])->name('jobs');
    #Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
    #Route::get('/products', [ProductController::class, 'index'])->name('products');
    #Route::get('/events', [EventController::class, 'index'])->name('events');
    #Route::get('/albums', [AlbumController::class, 'index'])->name('albums');
    #Route::get('/games', [GameController::class, 'index'])->name('games');
    #Route::get('/forums', [ForumController::class, 'index'])->name('forums');

});



