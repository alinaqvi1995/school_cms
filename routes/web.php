<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/view/{id}', [UserController::class, 'viewUser']);

Route::get('/view/{id}', [UserController::class, 'viewUser'])->name('home');

Route::get('/edit/{id}', [UserController::class, 'editUser']);

Route::get('/delete/{id}', [UserController::class, 'delUser']);

Route::post('/update', [UserController::class, 'updateUser'])->name('profile.update');

