<?php

use App\Http\Controllers\ObatController;
use App\Http\Controllers\PasienController;
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

// Pasien Only
Route::get('/pasien', [PasienController::class, 'index'])->name('pasien');
Route::get('/tambahpasien', [PasienController::class, 'tambahpasien'])->name('tambahpasien');
Route::post('/insertpasien', [PasienController::class, 'insertpasien'])->name('insertpasien');
Route::get('/tampilpasien/{id}', [PasienController::class, 'tampilpasien'])->name('tampilpasien');
Route::post('/updatepasien/{id}', [PasienController::class, 'updatepasien'])->name('updatepasien');
Route::delete('/deletepasien/{id}', [PasienController::class, 'deletepasien'])->name('deletepasien');


// Obat only
Route::get('/obat', [ObatController::class, 'obat'])->name('obat');
Route::get('/tambahobat', [ObatController::class, 'tambahobat'])->name('tambahobat');
Route::post('/insertobat', [ObatController::class, 'insertobat'])->name('insertobat');
Route::get('/tampilobat/{id}', [ObatController::class, 'tampilobat'])->name('tampilobat');
Route::post('/updateobat/{id}', [ObatController::class, 'updateobat'])->name('updateobat');
Route::delete('/deleteobat/{id}', [ObatController::class, 'deleteobat'])->name('deleteobat');


// Pegawai Only
Route::get('/pegawai', [Controller::class, 'pegawai'])->name('pegawai');