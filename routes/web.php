<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/rastas/create', [HomeController::class, 'create'])->name('create');
Route::post('/rastas/store', [HomeController::class, 'store'])->name('store');
Route::get('/rastas/edit/{id}', [HomeController::class, 'edit'])->name('edit');
Route::put('/rastas/{id}', [HomeController::class, 'update'])->name('update');


Route::delete('/rastas/{id}', [HomeController::class, 'destroy']);
Route::get('/productos', [HomeController::class,'show'])->name('show');
Route::get('/baridreads', [HomeController::class,'about'])->name('about');
Route::get('/contacto', [HomeController::class,'contact'])->name('contact');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();