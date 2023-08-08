<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\RapatController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'index']);

// blog
Route::get('/blog', [BlogController::class, 'index']);
ROute::post('/save', [BlogController::class, 'store']);
Route::put('/blog/{id}', [BlogController::class, 'update']);
Route::delete('/blog/{id}', [BlogController::class, 'destroy']);

// rapat
Route::get('/rapat', [RapatController::class, 'index']);
ROute::post('/save', [RapatController::class, 'store']);
Route::put('/rapat/{id}', [RapatController::class, 'update']);
Route::delete('/rapat/{id}', [RapatController::class, 'destroy']);
