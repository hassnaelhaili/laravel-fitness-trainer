<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProgramController;
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

  //programe Routes

Route::get('/clients/{client}/programs',[ProgramController::class,'index'])->name('programs_index');
Route::get('/clients/{client}/programs/create',[ProgramController::class,'create'])->name('create_program_form');
Route::post('/clients/{client}/programs',[ProgramController::class,'store'])->name('program_store');
Route::get('/programs/{program}/show',[ProgramController::class,'show'])->name('program_show');
Route::get('/programs/{program}/edit',[ProgramController::class,'edit'])->name('program_edit');
Route::post('/programs/{program}',[ProgramController::class,'update'])->name('program_update');
Route::get('/programs/{program}',[ProgramController::class,'destroy'])->name('program_destroy');

// longin routes:

Route::get('/register',[LoginController::class,'getRegister'])->name('register_form');
Route::post('/register',[LoginController::class,'register'])->name('register');
