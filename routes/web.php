<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/keuangan', [PagesController::class, 'keuangan'])->name('keuangan');
Route::get('/sptbh', [PagesController::class, 'sptbh'])->name('sptbh');
Route::get('/kontak', [PagesController::class, 'kontak'])->name('kontak');
Route::get('/kepanitiaan', [PagesController::class, 'kepanitiaan'])->name('kepanitiaan');
Route::get('/kepanitiaan/detail_id', [PagesController::class, 'kepanitiaanDetail'])->name('kepanitiaanDetail');
Route::get('/kepanitiaan/apply', [PagesController::class, 'kepanitiaanApply'])->name('kepanitiaanApply');