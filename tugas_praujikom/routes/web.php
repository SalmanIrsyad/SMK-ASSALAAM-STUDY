<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

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
// Route::get('/berita', function () {
//     return view('berita');
// });
Route::get('/contact', function () {
    return view('contact');
});
Route::resource('/berita', UserController::class);

Route::group(['prefix' => 'admin'], function () {
    
    Route::resource('/berita', BeritaController::class);
    Route::post('/berita', [BeritaController::class, 'store'])->name('store');
    Route::delete('/berita/{berita:slug}', [BeritaControllelr::class, 'destroy'])->name('delete');
    Route::get('/berita/{berita:slug}/edit', [BeritaController::class, 'edit'])->name('edit');
});

Auth::routes();

Route::get('/admin/berita', [App\Http\Controllers\HomeController::class, 'index'])->name('login');
