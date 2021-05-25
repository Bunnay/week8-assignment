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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home',function(){
    return view('home');
}) -> name('page.home');

Route::get('/about',function(){
    return view('about');
}) -> name('page.about');

Route::get('/contact',function(){
    return view('contact');
})-> name('page.contact');

Route::get('/post',function(){
    return view('post');
})-> name('page.post');
