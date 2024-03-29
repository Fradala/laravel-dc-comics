<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController as GuestComicController;

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
    return view('pages.home');
});

Route::get('/comics', [GuestComicController::class, 'index'])->name('guest.comics.index');
Route::get('/comics/create', [GuestComicController::class, 'create'])->name('guest.comics.create');
Route::post('/comics/create', [GuestComicController::class, 'store'])->name('guest.comics.store');
Route::get('/comics/{id}', [GuestComicController::class, 'show'])->name('guest.comics.show');
Route::put('/comics/{id}', [GuestComicController::class, 'update'])->name('guest.comics.update');
Route::get('/comics/{id}/edit', [GuestComicController::class, 'edit'])->name('guest.comics.edit');

