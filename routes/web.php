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

Route::get('/', function () { return view('welcome');});
Route::resource('products','App\Http\Controllers\ProductController');
Route::resource('roles','App\Http\Controllers\RoleController')->middleware('App\Http\Middleware\Admin');
Route::resource('users','App\Http\Controllers\UserController')->middleware('App\Http\Middleware\Admin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
