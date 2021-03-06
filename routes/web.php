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
Route::get('pay', [App\Http\Controllers\PayController::class, 'index']);

Route::get('/edit/{anak_id}', [App\Http\Controllers\PayController::class, 'parse']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\TemanController::class, 'index'])->name('home');
Route::get('/home/hapus/{id}', [App\Http\Controllers\TemanController::class, 'delete']);
Route::post('/home/add',[App\Http\Controllers\TemanController::class, 'validator']);
