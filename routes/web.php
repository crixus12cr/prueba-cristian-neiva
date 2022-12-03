<?php

use App\Http\Controllers\DerechoCultural\derechoCulturalController;
use App\Http\Controllers\Experticia\experticiaController;
use App\Http\Controllers\Formulario\formularioController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\Nac\nacController;
use App\Http\Controllers\User\userController;
use App\Models\Nac;
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

Route::get('/', [indexController::class, 'index'])->name('home');

Route::get('derechos-culturales', [derechoCulturalController::class, 'index'])->name('derechos-culturales');
Route::get('experticia', [experticiaController::class, 'index'])->name('experticia');
Route::get('nacs', [nacController::class, 'index'])->name('nacs');
Route::get('users', [userController::class, 'index'])->name('users');
Route::post('/formulario', [formularioController::class, 'store'])->name('formulario');
