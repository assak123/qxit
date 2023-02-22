<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ApplicantController;
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

// Route::get('/', function () {
//     return view('index', 'app/Http/Controllers/ApplicantController@index');
// });

// Route::get('/', 'ApplicantController@index');

Route::get('/', [App\Http\Controllers\ApplicantController::class, 'index']);

Route::get('/edit', [App\Http\Controllers\ApplicantController::class, 'edit']);

Route::get('/delete', [App\Http\Controllers\ApplicantController::class, 'delete']);

Route::get('/store', [App\Http\Controllers\ApplicantController::class, 'store']);

Route::get('/update', [App\Http\Controllers\ApplicantController::class, 'update']);
