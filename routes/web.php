<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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

Route::get('/', [ListingController::class, 'index'])->name('index');


Route::get('/listings', [ListingController::class, 'show'])->middleware('auth');
Route::post('/listings', [ListingController::class, 'test']);


Route::get('/listings/add', [ListingController::class, 'add'])->middleware('auth');
Route::post('/listings/add', [ListingController::class, 'store'])->middleware('auth');

Route::get('/listings/edit/{listing}', [ListingController::class, 'edit'])->middleware('auth');
Route::put('/listings/edit/{listing}', [ListingController::class, 'update'])->middleware('auth');
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->name('listings.destroy')->middleware('auth');

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('users/authenticate', [UserController::class, 'authenticate']);


Route::get("/register", [UserController::class, 'create'])->middleware('guest');
Route::post("/users", [UserController::class, 'store']);
Route::post("/logout", [UserController::class, 'logout'])->middleware('auth');




