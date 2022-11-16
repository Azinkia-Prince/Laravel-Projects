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

Route::get('/details', [App\Http\Controllers\s_controller :: class, 's_func']);

Route::post('/record', [App\Http\Controllers\s_controller :: class, 'store']);

Route::get('/teacher', [App\Http\Controllers\t_controller :: class, 't_func']);
Route::post('/t_rec', [App\Http\Controllers\t_controller :: class, 't_store']);
