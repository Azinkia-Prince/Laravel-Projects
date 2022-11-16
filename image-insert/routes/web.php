<?php

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

Route::get('/details', [App\Http\Controllers\imgController::class,'imgFunc']);
Route::post('/record', [App\Http\Controllers\imgController::class,'store']);
Route::get('/view', [App\Http\Controllers\imgController::class,'view_data']);
Route::get('/{id}/edit', [App\Http\Controllers\imgController::class,'edit']);
Route::post('/record/{id}', [App\Http\Controllers\imgController::class,'update']);
Route::get('/{id}', [App\Http\Controllers\imgController::class,'remove']);