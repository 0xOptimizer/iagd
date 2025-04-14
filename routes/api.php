<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// api v1 group
Route::group(['prefix' => 'v1'], function () {
    Route::get('/pets/count', [APIController::class, 'get_pets_count'])->name('api.v1.pets.count');
    Route::get('/species/{species}', [APIController::class, 'get_species'])->name('api.v1.species.filter');
});