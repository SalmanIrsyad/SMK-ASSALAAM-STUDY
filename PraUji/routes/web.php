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

Route::post('/logout', 'Auth\LoginController@logout')->name('logout');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/admin', function () {
    return view('admin');
})->middleware('auth', 'check.role:admin');

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('auth', 'check.admin');
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user')->middleware('auth', 'check.user');

