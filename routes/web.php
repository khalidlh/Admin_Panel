<?php

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


Route::get('/app',function() {
    return view('admin.dashbord');
});

Route::get('/login',function() {
    return view('authentification.login');
});
Route::get('/users',function() {
    return view('crud.gestionusers');
});
Route::get('/graphs',function() {
    return view('graphs.graphs');
});
Route::get('/message',function() {
    return view('authentification.messageactivation');
});
Route::get('/inbox',function() {
    return view('mailing.inbox');
});