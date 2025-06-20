<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoletinController;

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
Route::get('/boletin', [BoletinController::class, 'index']);
Route::get('/boletin2b', [BoletinController::class, 'segundoB']);
Route::get('/boletin4a', [BoletinController::class, 'boletin4a']);
Route::get('/boletin4b', [BoletinController::class, 'cuartoB']);

/*Rutas a secciones de 6to grado*/
Route::get('/boletincfm', [BoletinController::class, 'boletinCFM']);
Route::get('/boletin6csh', [BoletinController::class, 'sextoCSH']);
Route::get('/boletin6ea', [BoletinController::class, 'sextoEA']);
Route::get('/boletin6qb', [BoletinController::class, 'sextoQB']);



