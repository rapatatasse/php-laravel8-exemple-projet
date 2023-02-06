<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () { return view('welcome');}); //page d'acceuil pour personne non connectée
Route::get('/home', [HomeController::class, 'index'])->middleware('App\Http\Middleware\Admin'); 
Route::resource('products','App\Http\Controllers\ProductController');
Route::resource('roles','App\Http\Controllers\RoleController')->middleware('App\Http\Middleware\Admin');

Route::resource('users','App\Http\Controllers\UserController')->middleware('App\Http\Middleware\Admin');//n'autorise que les admin a voir cette vue

Auth::routes();

