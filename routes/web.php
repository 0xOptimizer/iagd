<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PublicController;
use App\Http\Controllers\SessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('/auth/store-token', [SessionController::class, 'storeToken']);
Route::post('/auth/logout', [SessionController::class, 'logout'])->name('logout');

Route::get('/', [PublicController::class, 'index'])->name('index');
Route::get('/register', [PublicController::class, 'register'])->name('register');