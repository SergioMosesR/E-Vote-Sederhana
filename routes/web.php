<?php

use App\Http\Controllers\FunctionController;
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

Route::get('', [FunctionController::class, 'LoginPage'])->name('LoginPage');
Route::get('verification', [FunctionController::class, 'Verification'])->name('Verification');
Route::get('logout', [FunctionController::class, 'Logout'])->name('Logout');
Route::get('dashboard', [FunctionController::class, 'Dashboard'])->name('Dashboard');
