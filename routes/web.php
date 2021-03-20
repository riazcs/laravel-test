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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/create-key',[App\Http\Controllers\HomeController::class, 'create_key'])->name('create-key');
Route::post('/update-key',[App\Http\Controllers\HomeController::class, 'update_key'])->name('update-key');
Route::post('/active-key',[App\Http\Controllers\HomeController::class, 'active_key'])->name('active-key');