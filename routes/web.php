<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Auth;

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

//Show car view

Route::get('/cars/index', [CarController::class, 'index'])->name('index');

//show create form 

Route::get('/cars/create', [CarController::class, 'create'])->name('create')->middleware('auth');

//Stores created cars in db

Route::post('/cars', [CarController::class, 'store'])->name('store')->middleware('auth');

//Show single car
Route::get('/cars/{car}', [CarController::class, 'show'])->middleware('auth');