<?php

use App\Http\Controllers\Admin\PesanController;
use App\Http\Controllers\PemesananController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('landing_page');
});

Route::get('/admin', function () {
    return view('admin/dashboard');
});

Route::get('/pesan', function () {
    return view('pemesanan');
});
// Route::get('/admin', function () {
//     return view('/admin/dashboard');
// });

// Route::post('/pemesanan', function () {
//     return view('/admin/pemesanan');
// });

// Route::get('/pesan', [PemesananController::class, 'index'])->name('datapesanan');
// Route::put('/admin', [PemesananController::class, 'update'])->name('psn.update');
// Route::delete('/admin/hapus', [PemesananController::class, 'destroy'])->name('psn.delete');
// Route::post('/admin/store', [PemesananController::class, 'storePengguna'])->name('pgnstore');

Route::get('/pemesanan', [PemesananController::class, 'index']);
Route::post('/addpesan', [PemesananController::class, 'add'])->name('psn.addpesan');
Route::get('/delete/{id}', [PemesananController::class, 'delete']);
Route::get('/edit/{id}', [PemesananController::class, 'edit']);
Route::post('/edit/{id}', [PemesananController::class, 'update']);
