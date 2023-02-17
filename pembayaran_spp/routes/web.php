<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Dashboard;
use App\Http\Controllers\Web\Data_Petugas;

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


 
Route::controller(Dashboard::class)->group(function () {
    Route::get('/', 'index');
});

Route::controller(Data_Petugas::class)->group(function () {
    Route::get('/petugas', 'index');
});
