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

Route::get('/details',[App\Http\Controllers\studentController::class,'StuFunc']);
Route::post('/record',[App\Http\Controllers\studentController::class,'store']);
Route::get('/{id}/edit',[App\Http\Controllers\studentController::class,'edit']);
Route::get('/{id}',[App\Http\Controllers\studentController::class,'destroy']);
Route::post('/record/{id}',[App\Http\Controllers\studentController::class,'update']);

