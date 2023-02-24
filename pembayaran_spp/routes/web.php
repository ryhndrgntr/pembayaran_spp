<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Dashboard;
// use App\Http\Controllers\Web\Data_Petugas;
// use App\Http\Controllers\Web\Siswa;
// use App\Http\Controllers\Web\Kelas;
// use App\Http\Controllers\Web\SPP;

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SPPController;
use App\Http\Controllers\AuthController;

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
Route::get('/', [AuthController::class, 'landing'])->name('landing');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth','user-role:admin'])->group(function()
{
    Route::controller(Dashboard::class)->group(function () {
        Route::get('/dash/admin', 'admin');
    });
    Route::resource('/siswa', SiswaController::class);
    Route::resource('/petugas', PetugasController::class);
    Route::resource('/kelas', KelasController::class);
    Route::resource('/spp', SPPController::class);
});

Route::middleware(['auth','user-role:petugas'])->group(function()
{
    Route::controller(Dashboard::class)->group(function () {
        Route::get('/dash/petugas', 'petugas');
    });
});

Route::middleware(['auth','user-role:siswa'])->group(function()
{
    Route::controller(Dashboard::class)->group(function () {
        Route::get('/dash/siswa', 'siswa');
    });
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
// Route::controller(AuthController::class)->group(function () {
//     Route::get('/login', 'showLoginForm')->name('login');
//     Route::get('/login', 'login');

// });