<?php

use App\Http\Controllers\ComputeController;
use App\Http\Controllers\ImportationController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('importation', ImportationController::class);
Route::get('compute',[ComputeController::class, 'index'])->name("compute");
Route::post('compute', [ComputeController::class, 'compute'])->name("compute.store");

