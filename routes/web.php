<?php

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/customers', [CustomersController::class, 'index'])->name('customers.index');
Route::get('/customers/create', [CustomersController::class, 'create'])->name('customers.create');
Route::post('/customers', [CustomersController::class, 'store'])->name('customers.store');
Route::get('/customers/{customer}/edit', [CustomersController::class, 'edit'])->name('customers.edit');
Route::patch('/customers/{customer}', [CustomersController::class, 'update'])->name('customers.update');
Route::delete('/customers/{customer}', [CustomersController::class, 'destroy'])->name('customers.destroy');
