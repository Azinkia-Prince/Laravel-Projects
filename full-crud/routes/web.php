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

Route::get('/register',[App\Http\Controllers\studentController::class,'stuFunc']);
Route::post('/record',[App\Http\Controllers\studentController::class,'store']);
Route::get('/view',[App\Http\Controllers\studentController::class,'viewdata']);
Route::get('/{id}/edit',[App\Http\Controllers\studentController::class,'edit']);
Route::post('/record/{id}',[App\Http\Controllers\studentController::class,'update']);
Route::get('/{id}',[App\Http\Controllers\studentController::class,'remove']);

