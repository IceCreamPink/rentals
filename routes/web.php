<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\MerkController;
use App\Http\Controllers\TypeController;
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

Route::get('/', [DashboardController::class, 'index']);
Route::get('merk', [MerkController::class, 'index'])->name('tampilmerk');
Route::get('merk/create', [MerkController::class, 'create'])->name('addmerk');
Route::get('merk/{merk}/edit', [MerkController::class, 'edit'])->name('editmerk');
Route::get('merk/{merk}', [MerkController::class, 'show'])->name('hapusmerk');
Route::post('merk', [MerkController::class, 'store'])->name('simpanmerk');
Route::put('merk/{merk}',[MerkController::class,'update'])->name('updatemerk');
// Route::resource('merk',[MerkController::class]);
Route::resource('type', TypeController::class);
Route::resource('kendaraan', KendaraanController::class);