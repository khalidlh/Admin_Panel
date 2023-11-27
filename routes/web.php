<?php

use App\Http\Controllers\AuthWithGoogleController;
use App\Http\Controllers\EmailAPIController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ValidationLogin;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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
    return view('admin.dashbord');
})->name('/');
Route::prefix('login')->name('login.')->group(function(){
    Route::get('/login',[ValidationLogin::class,'View_login'])->name('auth');
    Route::get('/2FA',[ValidationLogin::class,'View_2FA']);
});

Route::get('/app', function () {
    return view('admin.dashbord');
});
Route::get('/setting', function () {
    return view('admin.setting');
})->name('setting');

Route::get('/users', function () {
    return view('crud.gestionusers');
})->name('users');
Route::get('/graphs', function () {
    return view('graphs.graphs');
})->name('charts');
Route::get('/message', function () {
    return view('authentification.messageactivation');
});
Route::get('/inbox', function () {
    return view('mailing.inbox');
});
Route::get('/profile', function () {
    return view('profile.profile');
})->name('profile');
Route::get('/maps', function () {
    return view('location.maps');
});

Route::prefix('google')->name('google.')->group(function(){
    Route::get('/auth/withgoogle',[AuthWithGoogleController::class,'redirectToGoogle'])->name('authgoogle');
    Route::get('/auth/google/callback1',[AuthWithGoogleController::class,'handleGoogleCallback'])->name('callback');
});

Route::get('/email',[EmailAPIController::class,'fetchEmails'])->name('ge');
Route::get('sendsms',[NotificationController::class,'sendsms']);
Route::get('MailMessages',[EmailAPIController::class,'index']);


