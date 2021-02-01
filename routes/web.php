<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\HomeController;
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

// Auth

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'login'])->name('login.attempt')->middleware('guest');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'index'])->middleware('auth');

Route::get('/about', [HomeController::class, 'about'])->middleware('auth');

Route::get('/customers', [CustomersController::class, 'index'])->name('customers.index')->middleware('auth');
Route::get('/customers/create', [CustomersController::class, 'create'])->name('customers.create')->middleware('auth');
Route::post('/customers', [CustomersController::class, 'store'])->name('customers.store')->middleware('auth');
Route::get('/customers/{customer}/edit', [CustomersController::class, 'edit'])->name('customers.edit')->middleware('auth');
Route::patch('/customers/{customer}', [CustomersController::class, 'update'])->name('customers.update')->middleware('auth');
Route::delete('/customers/{customer}', [CustomersController::class, 'destroy'])->name('customers.destroy')->middleware('auth');
