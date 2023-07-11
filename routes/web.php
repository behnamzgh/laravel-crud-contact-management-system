<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', [ContactController::class, 'index'])->name('home');
Route::get('/create', [ContactController::class, 'create'])->name('create');
Route::post('/store', [ContactController::class, 'store'])->name('store');
Route::get('/view/{id}', [ContactController::class, 'show']);
Route::get('/edit/{id}', [ContactController::class, 'edit']);
Route::post('/update/{id}', [ContactController::class, 'update'])->name('update');
Route::get('/recyclebin',[ContactController::class, 'recyclebin'])->name('recyclebin'); // namayesh recycle bin
Route::get('/delete/{id}', [ContactController::class, 'trash'])->name('trash'); //trash endakhtan contact
Route::get('/restore/{id}',[ContactController::class, 'restore'])->name('restore'); //restore trashed contact
Route::get('/destroy/{id}', [ContactController::class, 'destroy'])->name('destroy'); // delete contact
