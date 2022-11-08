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


Route::get('login', [\App\Http\Controllers\LoginController::class, 'loginForm'])->name('view.login');
Route::post('login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('chat');
    Route::get('logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
    Route::get('messages', [\App\Http\Controllers\ChatController::class, 'fetchMessage'])->name('messages');
    Route::post('send', [\App\Http\Controllers\ChatController::class, 'send']);
});

