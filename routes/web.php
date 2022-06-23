<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\GrauController;
use App\Http\Controllers\AssignaturaController;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\MicroleccionController;
use App\Http\Controllers\MicrocontingutController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\OpcioneController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/perfil', App\Http\Controllers\UsersController::class);

Auth::routes();

Route::resource('/home', App\Http\Controllers\HomeController::class);

Route::resource('/usersadmins', App\Http\Controllers\UsersadminController::class);

Route::resource('/graus', App\Http\Controllers\GrauController::class);

Route::resource('/assignaturas', App\Http\Controllers\AssignaturaController::class);

Route::resource('/temas', App\Http\Controllers\TemaController::class);

Route::resource('/microleccions', App\Http\Controllers\MicroleccionController::class);

Route::resource('/microcontinguts', App\Http\Controllers\MicrocontingutController::class);

Route::resource('/faqs', App\Http\Controllers\FaqController::class);

Route::resource('/opciones', App\Http\Controllers\OpcioneController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
