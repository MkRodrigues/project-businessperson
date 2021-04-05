<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusinesspersonController;


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

Route::get('/', [BusinesspersonController::class, 'index'])->name('main.index');
Route::post('/businessperson/store', [BusinesspersonController::class, 'store'])->name('businessperson.store');
Route::get('/businessperson/show/{businessperson}', [BusinesspersonController::class, 'show'])->name('businessperson.show');
Route::delete('/businessperson/destroy/{businessperson}', [BusinesspersonController::class, 'destroy'])->name('businessperson.destroy');
