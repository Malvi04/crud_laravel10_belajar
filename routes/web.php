<?php

use App\Http\Controllers\PegawaiController;
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

Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/tambah', [PegawaiController::class, 'tambah']);
Route::post('/store', [PegawaiController::class, 'store']);
Route::get('/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/update', [PegawaiController::class, 'update']);
Route::get('/hapus/{id}', [PegawaiController::class, 'hapus']);
