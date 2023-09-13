<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;


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


Route::get('/uploadpage', [FileController::class,'uploadpage']);
Route::get('/welcome', [FileController::class,'welcome']);
Route::post('/uploadfile', [FileController::class,'uploadfile']);


Route::get('/uploadpage', [FileController::class,'show']);

Route::get('/download/{file}', [FileController::class,'download']);

Route::get('/view/{is}', [FileController::class,'view']);