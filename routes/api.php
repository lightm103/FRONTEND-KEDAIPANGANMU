<?php

use App\Http\Controllers\GetDataJson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

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


Route::get('/data_nasional', [GetDataJson::class, 'data_nasional'])->name('data_nasional');
Route::get('/get-data/{year}/{jenisDataPanel}', [GetDataJson::class, 'getData']);
Route::get('/fsva-data', [GetDataJson::class, 'getFSVAData']);