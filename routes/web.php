<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
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

Route::get('/app', [AppController::class, 'index']);
Route::get('/app/create', [AppController::class, 'create']);
Route::get('/app/edit', [AppController::class, 'edit']);
Route::get('/app/store', [AppController::class, 'store']);