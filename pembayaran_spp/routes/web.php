<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Dashboard;
use App\Http\Controllers\Web\Data_Petugas;
use App\Http\Controllers\Web\Siswa;
use App\Http\Controllers\Web\Kelas;
use App\Http\Controllers\Web\SPP;

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SPPController;

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
    Route::get('/', 'landing');
    Route::get('/dashboard', 'index');

});

// Route::controller(Data_Petugas::class)->group(function () {
//     Route::get('/petugas', 'index');
// });

// Route::controller(Kelas::class)->group(function () {
//     Route::get('/kelas', 'index');
// });

// Route::controller(SPP::class)->group(function () {
//     Route::get('/spp', 'index');
// });

Route::resource('/siswa', SiswaController::class);
Route::resource('/petugas', PetugasController::class);
Route::resource('/kelas', KelasController::class);
Route::resource('/spp', SPPController::class);