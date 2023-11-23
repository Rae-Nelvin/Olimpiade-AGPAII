<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\User\UserController;
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
Route::get('/download/{filename}', [DownloadController::class, 'download'])->name('file.download');


Route::middleware(['auth', 'isParticipant'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');

    Route::get('/data-diri', [UserController::class, 'dataDiriIndex'])->name('data-diri');
    Route::get('/perbaharui-data-diri/{id}', [UserController::class, 'edit'])->name('perbaharui-data-diri');
    Route::put('/update-data-diri', [UserController::class, 'update'])->name('update-data-diri');
});


Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard-admin', [AdminController::class, 'index'])->name('dashboard-admin');

    Route::get('/data-peserta', [AdminController::class, 'dataPesertaIndex'])->name('data-peserta');
    Route::delete('/data-peserta/{id}', [AdminController::class, 'destroy'])->name('delete-participant');
    Route::get('/download-data-peserta', [AdminController::class, 'export'])->name('download-data-peserta');
    Route::post('/search-participant', [AdminController::class, 'show'])->name('search-participant');
    Route::get('/data-peserta/{id}', [AdminController::class, 'edit'])->name('show-participant');
    Route::post('/data-peserta', [AdminController::class, 'update'])->name('update-participant');
    Route::get('/isi-data-ujian/{id}', [AdminController::class, 'isiDataUjian'])->name('isi-data-ujian');
    Route::post('/isi-data-ujian', [AdminController::class, 'storeDataUjian'])->name('store-data-ujian');
});


require __DIR__ . '/auth.php';
