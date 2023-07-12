<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BeritaController;
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
    return view('index');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/berita', function () {
    return view('berita');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::group(['prefix' => 'admin'], function () {
    
    Route::resource('/berita', BeritaController::class);
});