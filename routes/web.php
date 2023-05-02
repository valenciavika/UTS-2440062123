<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
use App\Http\Controllers\userController;
Route::get('/{id}', [usercontroller::class, 'index']);
// use App\Http\Controllers\coffeecontroller;
// Route::get('/coffee/{id}', [coffeecontroller::class, 'coffee']);

use App\Http\Controllers\ccontroller;
Route::get('/coffee/{use}/{id}', [ccontroller::class, 'index']);

use App\Http\Controllers\transactionController;
Route::get('/transaction/{id}', [transactionController::class, 'index'])->name('transactions.index');
Route::get('/coffee/buy/{coffee}/{user}', [ccontroller::class, 'buy'])->name('coffee.buy');
