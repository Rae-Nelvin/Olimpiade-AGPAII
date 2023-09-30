<?php

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/data-diri', function () {
    return view('data-diri');
})->name('data-diri');

Route::get('/dashboard-admin', function () {
    return view('admin.dashboard');
})->name('dashboard-admin');

Route::get('/data-peserta', function () {
    return view('admin.data-peserta');
})->name('data-peserta');

require __DIR__ . '/auth.php';
