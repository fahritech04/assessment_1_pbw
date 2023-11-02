<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/vehicles', [VehicleController::class, 'index'])->name('kendaraan.daftarKendaraan');
    Route::get('/transaksi', [TransactionController::class, 'index'])->name('transaksi.daftarTransaksi');
    Route::get('/transaksiTambah', [TransactionController::class, 'create'])->name('transaksi.peminjaman');
    Route::get('/transaksiKembali/{id}', [TransactionController::class, 'edit'])->name('transaksi.pengembalian');
    Route::post('/transaksiStore', [TransactionController::class, 'store'])->name('transaksi.daftarTransaksi');
});

require __DIR__.'/auth.php';
