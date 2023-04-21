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

// Route::get('/bcom', function(){
//     return auth()->user();
// });

// //Show Login Form
// Route::get('/login', [UserController::class, 'login']);

// //Show Register Form
// Route::get('/register', [UserController::class, 'register']);

// Auth::routes();

// //User Route
// Route::middleware(['auth', 'user-role:user'])->group(function(){
//     Route::get('/user', [UserController::class, 'userLogin'])->name('user');
// });

// //Editor Route
// Route::middleware(['auth', 'user-role:editor'])->group(function(){
//     Route::get('/editor/user', [UserController::class, 'userLogin'])->name('user.editor');
// });

// //Admin Route
// Route::middleware(['auth', 'user-role:admin'])->group(function(){
//     Route::get('/admin/user', [UserController::class, 'userLogin'])->name('user.admin');
// });

Route::get('/car/index', [CarController::class, 'index'])->name('index');

Route::get('/car/create', [CarController::class, 'create'])->name('create');