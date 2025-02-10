<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\HrisController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SelfController;
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

// Route::get('/', function () {
//     return redirect(route('login'));
// });

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/auth/store-token', [SessionController::class, 'storeToken']);
Route::post('/auth/logout', [SessionController::class, 'logout'])->name('logout');


Route::prefix('profiling')->group(function () {
    Route::get('/records/all', [HrisController::class, 'all_records'])->name('profiling.all_records');
    Route::get('/qr', [HrisController::class, 'qr_codes'])->name('profiling.qr_codes');
    Route::get('/training/vouchers', [TrainingController::class, 'vouchers'])->name('training.vouchers');
});

Route::get('/', [SelfController::class, 'index'])->name('index');
Route::get('/self', function () {
    return redirect(route('index'));
});
Route::get('/id/{id}', [SelfController::class, 'qr_profile'])->name('qr_profile');
Route::get('/qr/{id}', [SelfController::class, 'generate_qr_code'])->name('generate_qr_code');