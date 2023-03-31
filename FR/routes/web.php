<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
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
    return view('welcome');
});


Route::get('/home', [PublicController::class, 'home'])->name('home');

Route::get('/tickets', [PublicController::class, 'tickets'])->name('tickets');

Route::get('/partymakers', [PublicController::class, 'partymakers'])->name('partymakers');

Route::get('/profileDJ', [PublicController::class, 'profileDJ'])->name('profileDJ');

Route::put('/event/{Event}', [TablesController::class, 'updateevent']);
Route::put('/eventc/{Event}', [TablesController::class, 'updateeventclient']);
Route::put('/sponsorisation/{sponsorisation}', [TablesController::class, 'updatesponsorisation']);

Route::delete('/deleteevent/{Event}', [TablesController::class, 'deleteevent']);
Route::delete('/deleteeventclient/{Event}', [TablesController::class, 'deleteeventclient']);
Route::delete('/deleteSponsorship/{sponsorisation}', [TablesController::class, 'deleteSponsorship']);
Route::delete('/deleteuser/{user}', [TablesController::class, 'deleteuser']);

Route::post('/makeevent', [TablesController::class, 'makeevent']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/tables', [TablesController::class, 'tables'])->middleware(['auth', 'verified'])->name('tables');;



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
