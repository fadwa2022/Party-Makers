<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MakersController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\TablesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\ProfilePublicController;

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

Route::get('/sponsor', [PublicController::class, 'sponsor'])->name('sponsor');
Route::post('/Addsponsorship', [PublicController::class, 'makesponsor'])->middleware('auth');
Route::put('/dj', [ProfilePublicController::class, 'dj'])->middleware('auth');

Route::get('/home', [PublicController::class, 'home'])->name('home');
Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/tickets', [TicketsController::class, 'tickets'])->name('tickets');

Route::get('/partymakers', [MakersController::class, 'partymakers'])->name('partymakers');

Route::get('/profileDJ/{id}', [ProfilePublicController::class, 'profileDJ'])->name('profileDJ');


Route::group(['middleware' => ['auth','dj']], function () {

    Route::put('/updatedj/{id}', [ProfilePublicController::class, 'updateDj']);
    Route::get('/dashborddj/{name}', [ProfilePublicController::class, 'dashboard']);
    Route::post('/makepost', [ProfilePublicController::class, 'makepost']);
    Route::delete('/deletepost/{id}', [ProfilePublicController::class, 'deletepost']);

});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','admin'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function(){
    Route::get('Monprofile', [ProfilePublicController::class, 'profileClient'])->name('Monprofile');
    Route::delete('/deleteeventclient/{Event}', [ProfilePublicController::class, 'deleteeventclient']);
    Route::put('/updateevent/{Event}', [ProfilePublicController::class, 'updateevent']);

    Route::get('/yourtickets/{event}', [TicketsController::class, 'yourticket']);
    Route::post('/makeeventclient/{style}', [MakersController::class, 'makeeventclient']);
    Route::post('/makecomments/{id}', [ProfilePublicController::class, 'makecomments']);
    Route::get('profileDJ/updatelikes/{id}', [ProfilePublicController::class, 'updatelikes']);
});

Route::group(['middleware' => ['auth', 'admin']], function () {

    Route::get('/tables', [TablesController::class, 'tables'])->name('tables');;

    Route::put('/event/{Event}', [TablesController::class, 'updateevent']);
    Route::put('/eventc/{Event}', [TablesController::class, 'updateeventclient']);
    Route::put('/sponsorisation/{sponsorisation}', [TablesController::class, 'updatesponsorisation']);
    Route::put('/Style/{Style}', [TablesController::class, 'updateStyle']);

    Route::delete('/deleteevent/{Event}', [TablesController::class, 'deleteevent']);
    Route::delete('/deletestyle/{Style}', [TablesController::class, 'deleteStyle']);
    Route::delete('/deleteSponsorship/{sponsorisation}', [TablesController::class, 'deleteSponsorship']);
    Route::delete('/deleteuser/{user}', [TablesController::class, 'deleteuser']);

    Route::post('/makeevent', [TablesController::class, 'makeevent']);
    Route::post('/makestyle', [TablesController::class, 'makestyle']);


});




Route::post('/sendmail', [HomeController::class, 'sendContactForm']);


require __DIR__.'/auth.php';
