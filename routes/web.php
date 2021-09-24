<?php

use App\Http\Controllers\Ajax\LikeController;
use App\Http\Controllers\Ajax\InviteController;
use App\Http\Controllers\Ajax\NotificationController;
use App\Http\Controllers\Ajax\FriendController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\StoryController;
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
Route::middleware(['verified', 'auth'])->group(function(){
    Route::get('/language/{lang}', LanguageController::class)->name('language');
    
    Route::get('/', HomeController::class)->name('home');

    //ajax
    Route::post('/like', [LikeController::class, 'manage_likes']);
    //notifications 
    Route::post('/mark-as-read', [NotificationController::class, 'mark_as_read']);
    Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications');
    //ajax - sending invites
    Route::post('/add-friend-invite', [InviteController::class, 'store']);
    Route::delete('/remove-friend-invite', [InviteController::class, 'destroy']);
    //ajax - accepting/rejecting friend requests
    Route::post('/friend-accept',[FriendController::class, 'store']);
    Route::delete('/friend-decline',[FriendController::class, 'destroy']);
    //unfriend
    Route::post('/friend-remove/{id}',[FriendController::class, 'unfriend'])->name('unfriend');

    //profile
    Route::get('/profile/{user:username}', [ProfileController::class, 'show'])->name('profile');
    //stories
    Route::post('/create-story/{id}', [StoryController::class, 'store'])->name('story.add');
    Route::delete('/delete-story', [StoryController::class, 'destroy'])->name('story.destroy');
    Route::post('/show-story', [StoryController::class, 'count']);
    
    //post
    Route::resource('/post', PostController::class)->except(['index','edit','create']);

    //settings
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
    Route::put('/settings', [SettingsController::class, 'update']);

    //searches
    Route::get('/search', [SearchController::class, 'index']);
    Route::post('/search', [SearchController::class, 'store'])->name('search.add');
    
    //comments
    Route::post('/comment/{post}', [CommentController::class, 'store'])->name('comment.add');
    Route::delete('/comment/{id}', [CommentController::class, 'destroy'])->name('comment.destroy');
    Route::post('/allow-comments', [CommentController::class, 'allow_comments']);
    Route::post('/disable-comments', [CommentController::class, 'disable_comments']);

});



