<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlatController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\api\APIBarangController;

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


Route::get('/alat', [AlatController::class, 'index']);
Route::get('/alat/{id}', [AlatController::class, 'show']);
Route::post('/alat', [AlatController::class, 'store']);
Route::put('/alat/update/{id}', [AlatController::class, 'update']);
Route::delete('/alat/{id}', [AlatController::class, 'destroy']);

Route::get('/barang', [APIBarangController::class, 'index'])->middleware('auth:sanctum');
Route::get('/barang/koleksi', [APIBarangController::class, 'koleksi']);
Route::get('/barang/{id}', [APIBarangController::class, 'show']);
Route::post('/barang', [APIBarangController::class, 'create']);
Route::put('/barang/{id}', [APIBarangController::class, 'update']);
Route::delete('/barang/{id}', [APIBarangController::class, 'destroy']);


Route::post('/login', [PenggunaController::class, 'login']);
Route::post('/logout', [PenggunaController::class, 'logout'])->middleware('auth:sanctum');