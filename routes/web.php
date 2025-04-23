<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PetsController as AdminPetsController;
use App\Http\Controllers\Admin\SignInController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PublicController;
use App\Http\Controllers\Rest\PetController as RestPetController;
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

Route::get('/pets/{iagd_number}', [PublicController::class, 'pet_profile'])->name('pet_profile');
Route::get('/species/{species}', [PublicController::class, 'species'])->name('species');


/**
 * Admin route group for endpoints
 * @param string 'admin'
 * @return \Illuminate\Routing\RouteRegistrar
 */
Route::prefix('admin')->group(function () {

    /**
     * Show login page for admins
     * @param string '/'
     * @param array [SignInController::class, 'index']
     * @param string 'admin'
     * @return \Illuminate\Routing\Route
     */
    Route::get('/', [SignInController::class, 'index'])->name('admin');

    /**
     * Login validation endpoint for admins
     * @param string '/login'
     * @param array [AuthController::class, 'login']
     * @param string 'admin.login'
     * @return \Illuminate\Routing\Route
     */
    Route::post('/login', [AuthController::class, 'login'])->name('admin.login');

    /**
     * Logout admin
     * @param string '/logout'
     * @param array [AuthController::class, 'logout']
     * @param string 'admin.logout'
     * @return \Illuminate\Routing\Route
     */
    Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout')->middleware(['auth']);

    /**
     * Dashboard route group for endpoints
     * @param string 'dashboard'
     * @return \Illuminate\Routing\RouteRegistrar
     */
    Route::prefix('dashboard')->middleware(['auth'])->group(function () {

        /**
         * Show dashboard page
         * @param string '/'
         * @param array [DashboardController::class, 'index']
         * @param string 'dashboard'
         * @return \Illuminate\Routing\Route
         */
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    });

    /**
     * Pet page route groups
     * @param string 'pets'
     * @return \Illuminate\Routing\RouteRegistrar
     */
    Route::prefix('pets')->middleware(['auth'])->group(function () {

        /**
         * show pet page
         * @param string '/'
         * @param array [AdminPetsController::class , 'index']
         * @param string 'admin.pets'
         * @return \Illuminate\Routing\Route
         */
        Route::get('/', [AdminPetsController::class, 'index'])->name('admin.pets');

        /**
         * Show pet form
         * @param string '/form'
         * @param array [AdminPetsController::class , 'form']
         * @param string 'admin.pets.form'
         * @return \Illuminate\Routing\Route
         */
        Route::get('/form', [AdminPetsController::class, 'form'])->name('admin.pets.form');

        /**
         * Get all pets
         * @param string '/dt/all'
         * @param array [AdminPetsController::class , 'all']
         * @param string 'admin.pets.dt.all'
         * @return \Illuminate\Routing\Route
         */
        Route::get('/dt/all', [AdminPetsController::class, 'all'])->name('admin.pets.dt.all');

        /**
         * Delete specific pet
         * @param string '/dt/delete'
         * @param array [AdminPetsController::class , 'dtDelete']
         * @param string 'admin.pets.dt.delete'
         * @return \Illuminate\Routing\Route
         */
        Route::post('/dt/delete', [AdminPetsController::class, 'dtDelete'])->name('admin.pets.dt.delete');

        /**
         * Approve specific pet
         * @param string '/dt/approve'
         * @param array [AdminPetsController::class , 'dtApprove']
         * @param string 'admin.pets.dt.approve'
         * @return \Illuminate\Routing\Route
         */
        Route::post('/dt/approve', [AdminPetsController::class, 'dtApprove'])->name('admin.pets.dt.approve');


    });
});

Route::prefix('rest/v1')->group(function () {

    Route::prefix('pets')->group(function () {

        Route::get('/', [RestPetController::class, 'index'])->name('rest.v1.pets');

        Route::get('/get', [RestPetController::class, 'get'])->name('rest.v1.pets.get');

        Route::post('/create', [RestPetController::class, 'create'])->name('rest.v1.pets.create');

        Route::delete('/delete', [RestPetController::class, 'delete'])->name('rest.v1.pets.delete');

    });
});

