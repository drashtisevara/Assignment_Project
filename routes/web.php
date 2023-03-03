<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AccountController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\AccountController::class, 'index'])->name('home');

// Route::get('add_accounts' , 'add_accounts');

// Route::post('/add_accounts' , AccountController::class , 'data');

Route::post('/add_accounts',[AccountController::class,'create']);

Route::view('add_accounts', 'add_accounts');

// Route::resource('/add_accounts','AccountController');