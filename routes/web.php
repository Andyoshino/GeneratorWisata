<?php

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
    return view('welcome');
});


// Tempat Wisata

Route::post('/tempat-wisata', [TempatWisataController::class, 'store']);
Route::get('/tempat-wisata', [TempatWisataController::class, 'index']);
Route::get('/tempat-wisata/{id}', [TempatWisataController::class, 'view']);
Route::put('/tempat-wisata/{id}', [TempatWisataController::class, 'update']);
Route::delete('/tempat-wisata/{id}', [TempatWisataController::class, 'delete']);