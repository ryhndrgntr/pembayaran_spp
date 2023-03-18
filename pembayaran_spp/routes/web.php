<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Dashboard;


use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SPPController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\HistoriController;
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
// Route::get('/', [AuthController::class, 'landing'])->name('landing');
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('signin') ;
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::get('/dash', [AuthController::class, 'index'])->middleware('auth')->name('dash');


Route::middleware(['auth','user-role:admin'])->group(function()
{
    Route::controller(Dashboard::class)->group(function () {
        Route::get('/dashadmin', 'admin');
    });

    // Route::prefix('histori')->group(function(){
    //     Route::get('/',[HistoriController::class, 'index'])->name('histori.index');
    // });

    Route::resource('/siswa', SiswaController::class);
    Route::resource('/petugas', PetugasController::class);
    Route::resource('/kelas', KelasController::class);
    Route::resource('/spp', SPPController::class);

    // Route::resource('/transaksi', TransaksiController::class);
    // Route::prefix('transaksi')->group(function () {
    //     Route::get('/', [TransaksiController::class, 'index'])->name('transaksi.index');
    //     Route::get('/create', [TransaksiController::class, 'create'])->name('transaksi.create');
    //     Route::post('/', [TransaksiController::class, 'store'])->name('transaksi.store');
    //     Route::get('/{transaksi}/edit', [TransaksiController::class, 'edit'])->name('transaksi.edit');
    //     Route::put('/{transaksi}', [TransaksiController::class, 'update'])->name('transaksi.update');
    //     Route::delete('/{transaksi}', [TransaksiController::class, 'destroy'])->name('transaksi.destroy');
    // });
    
    Route::prefix('laporan')->group(function(){
        Route::get('/',[LaporanController::class, 'index'])->name('laporan.index');
        Route::post('/cetak',[LaporanController::class, 'laporan'])->name('laporan.cetak');
    });
});

Route::middleware(['auth','user-role:petugas'])->group(function()
{
    Route::controller(Dashboard::class)->group(function () {
        Route::get('/dashpetugas', 'petugas');
    });
    // Route::prefix('transaksi')->group(function () {
    //     Route::get('/', [TransaksiController::class, 'index'])->name('transaksi.index');
    //     Route::get('/create', [TransaksiController::class, 'create'])->name('transaksi.create');
    //     Route::post('/', [TransaksiController::class, 'store'])->name('transaksi.store');
    //     Route::get('/{transaksi}/edit', [TransaksiController::class, 'edit'])->name('transaksi.edit');
    //     Route::put('/{transaksi}', [TransaksiController::class, 'update'])->name('transaksi.update');
    //     Route::delete('/{transaksi}', [TransaksiController::class, 'destroy'])->name('transaksi.destroy');
    // });

});

Route::middleware(['auth','user-role:siswa'])->group(function()
{
    Route::controller(Dashboard::class)->group(function () {
        Route::get('/dashsiswa', 'siswa');
    });
    // Route::prefix('histori')->group(function(){
    //     Route::get('/',[HistoriController::class, 'index'])->name('histori.index');
    // });
});

Route::resource('/transaksi', TransaksiController::class)->middleware('auth','user-role:admin,petugas');
Route::resource('/histori', HistoriController::class)->middleware('auth','user-role:admin,siswa');

// Route::middleware(['auth','user-role:siswa'])->group(function()
// {
//     Route::controller(Dashboard::class)->group(function () {
//         Route::get('/dashsiswa', 'siswa');
//     });
//     Route::prefix('histori')->group(function(){
//         Route::get('/',[HistoriController::class, 'index'])->name('histori.index');
//     });
// });







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