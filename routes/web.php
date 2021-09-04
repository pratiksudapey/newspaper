<?php

use Illuminate\Support\Facades\Auth;
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
    return view('frontend.index');
});




Auth::routes();

Route::middleware(['auth'])->group(function(){

    Route::get('/about', function() {
        return view('frontend.about');
    });
    Route::get('/categori', function () {
        return view('frontend.categori');
    });
    Route::get('/contact', function () {
        return view('frontend.contact');
    });
    Route::get('/latest_news', function () {
        return view('frontend.latest_news');
    });
});

Route::middleware(['auth'] ,['admin'])->group(function(){

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
});
