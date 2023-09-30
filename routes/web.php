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
});


Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard-admin', [AdminController::class, 'index'])->name('dashboard-admin');

    Route::get('/data-peserta', [AdminController::class, 'dataPesertaIndex'])->name('data-peserta');
});


require __DIR__ . '/auth.php';
