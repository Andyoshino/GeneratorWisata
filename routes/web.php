<?php

use Illuminate\Support\Facades\UserController;
use App\Http\Controllers\TempatWisataController;
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
    return view('landing-page');
});


// User
Route::post('/user', [UserController::class, 'store']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/{username}', [UserController::class, 'view']);
Route::put('/user/{username}', [UserController::class, 'update']);
Route::delete('/user/{username}', [UserController::class, 'delete']);

// Tempat Wisata
Route::post('/tempat-wisata', [TempatWisataController::class, 'store']);
Route::get('/tempat-wisata', [TempatWisataController::class, 'index']);
Route::get('/tempat-wisata/{id}', [TempatWisataController::class, 'view']);
Route::put('/tempat-wisata/{id}', [TempatWisataController::class, 'update']);
Route::delete('/tempat-wisata/{id}', [TempatWisataController::class, 'delete']);
