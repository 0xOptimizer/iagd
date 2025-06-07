<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;
use App\Http\Controllers\NydusLoungeLinkController;

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

    Route::group(['prefix' => 'search'], function () {
        Route::get('/pets/id/{species}/{iagd_number}', [APIController::class, 'get_pet_profile'])->name('api.v1.pets.profile');
        Route::get('/pets/name/{species}/{name}', [APIController::class, 'get_pet_profile_by_name'])->name('api.v1.pets.profile.name');
        Route::get('/pets/internal/{id}', [APIController::class, 'get_pet_profile_by_id'])->name('api.v1.pets.profile.id');
    });
});

Route::prefix('nydus')->group(function () {
    Route::post('/callback', [NydusLoungeLinkController::class, 'callback'])->name('api.nydus.callback');
});