<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
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
Route::get('/dashboard', function () {
    return view('dachbord');
});
Route::get('/dashboardUser', function () {
    return view('dashboardUser');
});
Route::get('/dashboardEvent', function () {
    return view('dashboardEvent');
});
Route::get('/dashboardCategorie', function () {
    return view('dashboardCategorie');
});
Route::get('/dashboardEventAdd', function () {
    return view('dashboardEventAdd');
});


Route::get('/events/create', [EventController::class , "create"])->name('organisateur.create');

Route::post('/events', 'EventController@store')->name('events.store');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
