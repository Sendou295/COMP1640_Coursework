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

Route::get('user', function () {
    return view('user');
});

Route::get('home', function () {
    return view('home');
});

Route::get('idea', function () {
    return view('idea');
});

<<<<<<< Updated upstream
Route::get('page', function () {
    return view('page');
});
=======



Route::get('admin/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('admin.home')
    ->middleware('isAdmin');
>>>>>>> Stashed changes

Auth::routes();

<<<<<<< Updated upstream
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
=======


//admin
Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin_login');
Route::get('/dashboard', [\App\Http\Controllers\AdminController::class, 'show_dashboard'])->name('admin.dashboard');
>>>>>>> Stashed changes
