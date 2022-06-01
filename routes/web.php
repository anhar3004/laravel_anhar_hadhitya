<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\RumahSakitController;
use App\Http\Controllers\pasienController;
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
    return view('Login');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/dataPasien', function () {
    return view('dataPasien');
});
Route::get('/login', [Login::class, 'index'])->name('login');
Route::post('/cekLogin', [Login::class, 'cek']);
Route::get('/logout', [Login::class, 'logout']);

Route::get('/dataRumahSakit', [RumahSakitController::class, 'index']);
Route::post('/dataRumahSakit/tambah', [RumahSakitController::class, 'tambah']);
Route::get('/dataRumahSakit/{id}/edit', [RumahSakitController::class, 'edit']);
Route::post('/dataRumahSakit/{id}/update', [RumahSakitController::class, 'update']);
Route::get('/dataRumahSakit/{id}/delete', [RumahSakitController::class, 'delete']);

Route::get('/dataPasien', [pasienController::class, 'index']);
Route::post('/dataPasien/tambah', [pasienController::class, 'tambah']);
Route::get('/dataPasien/tampil', [pasienController::class, 'tampil']);
Route::get('/dataPasien/{id}/edit', [pasienController::class, 'edit']);
Route::post('/dataPasien/{id}/update', [pasienController::class, 'update']);
Route::get('/dataPasien/{id}/delete', [pasienController::class, 'delete']);
// Route::group(['middleware' => 'auth'], function () {

//     Route::get('/home', function () {
//         return view('home');
//     });
// });
