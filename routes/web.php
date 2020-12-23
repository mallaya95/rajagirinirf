<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
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

// Route::get('/', function () {
//     return view('layout.login');
// });

// Auth::routes();

Route::view('/', 'layout.login')->name('login');
Route::post('/login',[LoginController::class, 'login']);
Route::view('/login', 'layout.login')->name('login');
Route::group(['middleware' => 'auth'], function () {
//Route::get('/', 'HomeController@index')->name('home');
Route::get('/dashboard',[App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
});
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');