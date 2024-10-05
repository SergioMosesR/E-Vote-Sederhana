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

Route::get('', [FunctionController::class, 'TokenVerification'])->name('TokenVerification'); //Verification Token View
Route::get('verification', [FunctionController::class, 'Verification'])->name('Verification'); //Verification Token Process
Route::get('dashboard', [FunctionController::class, 'Dashboard'])->name('Dashboard'); //Participant Dashboard

Route::get('vote/paslon/1', [FunctionCOntroller::class, 'Paslon1'])->name('Paslon1'); //Process Vote Paslon1
Route::get('vote/paslon/2', [FunctionCOntroller::class, 'Paslon2'])->name('Paslon2'); //Process Vote Paslon2

Route::get('admin/kpo/login/view', [FunctionController::class, 'LoginView'])->name('LoginView'); //KPO Lo]gin View
Route::get('admin/kpo/login', [FunctionController::class, 'Login'])->name('Login'); //KPO Login Process
Route::get('dashboard/admin/kpo', [FunctionController::class, 'KPO'])->name('AdminKPO'); //KPO Total Votes
Route::get('dashboard/admin/kpo/detail/votes', [FunctionController::class, 'DetailKPO'])->name('DetailKPO'); //KPO Detail Votes

Route::get('logout', [FunctionController::class, 'Logout'])->name('Logout'); //Logout
