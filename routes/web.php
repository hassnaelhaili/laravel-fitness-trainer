<?php

use App\Http\Controllers\ClientController;
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


/**
 * Clients Routes
 */
Route::get('/clients',[ClientController::class,'index'])->name('clients_index');
Route::get('/clients/create',[ClientController::class,'create'])->name('create_client_form');
Route::post('/clients',[ClientController::class,'store'])->name('create_client');
Route::get('/clients/{client}',[ClientController::class,'show'])->name('show_client');
Route::get('/clients/{client}/edit',[ClientController::class,'edit'])->name('edit_client');
Route::post('/clients/{client}',[ClientController::class,'update'])->name('update_client');
Route::get('/clients/{client}/delete',[ClientController::class,'destroy'])->name('destroy_client');
