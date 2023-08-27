<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\LoginController;
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

Route::get('/dashboard',[DashboardController::class,'dashboard'])->middleware('auth');
Route::get('/dashboard/create',[DashboardController::class,'create'])->middleware('auth');
Route::post('/dashboard',[DashboardController::class,'store'])->middleware('auth');
Route::get('/dashboard/{id}/edit',[DashboardController::class,'edit'])->middleware('auth');
Route::put('/dashboard/{id}',[DashboardController::class,'update'])->middleware('auth');
Route::delete('/dashboard/{id}',[DashboardController::class,'destroy'])->middleware('auth');


Route::get('/foto',[FotoController::class,'foto'])->middleware('auth');


//--login--:
Route::get('/',[LoginController::class,'login']);
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout'])->middleware('auth');