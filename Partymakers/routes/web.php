<?php

use App\Http\Controllers\Tables;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TablesController;
use App\Http\Controllers\ProfileController;

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
    return view('public.home');
}) ->name('home');

Route::get('/tickets', function () {
    return view('public.tickets');
}) ->name('tickets');


Route::get('/partymakers', function () {
    return view('public.partymakers');
}) ->name('partymakers');

Route::get('/profileDJ', function () {
    return view('priver.profileDJ');
})->middleware(['auth', 'verified'])->name('profileDJ');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/tables', [TablesController::class, 'tables'])->name('tables');

});

require __DIR__.'/auth.php';
