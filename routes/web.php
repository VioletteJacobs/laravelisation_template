<?php

use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\TemplatisationController;
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

Route::get('/', [TemplatisationController::class, 'index']);
Route::get('/Backoffice', [BackofficeController::class, 'indexBack']);

Route::get('/BackNav', [BackofficeController::class, 'indexBackNav']);
Route::get('/show-Nav/{id}', [BackofficeController::class, 'showNav']);
Route::get('/edit-Nav/{id}', [BackofficeController::class, 'editNav']);
Route::get('/Createnav', [BackofficeController::class, 'createNav']);

Route::get('/BackPortfolio', [BackofficeController::class, 'indexBackNav']);
Route::get('/BackService', [BackofficeController::class, 'indexBackService']);
Route::get('/BackTitres', [BackofficeController::class, 'indexBackTitres']);

Route::Post('/create-Nav', [BackofficeController::class, "storeNav"]);
Route::Post('/delete-Nav/{id}', [BackofficeController::class, "destroyNav"]);
Route::Post('/update-Nav/{id}', [BackofficeController::class, "updateNav"]);
