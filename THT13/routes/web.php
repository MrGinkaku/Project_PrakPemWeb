<?php

use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('karyawan', [KaryawanController::class, 'index']);
Route::post('karyawan', [KaryawanController::class, 'store']);
Route::get('karyawan/{id}', [KaryawanController::class, 'edit']);
Route::put('karyawan/{id}', [KaryawanController::class, 'update']);
// Route::get('film', [FilmController::class, 'update']);
// Route::get('film', [FilmController::class, 'destroy']);