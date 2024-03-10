<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;

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


// Route::get('/events/create', [EventController::class , "create"])->name('organisateur.create');
// Route::post('/events', [EventController::class , "store"])->name('events.store');
// Route::post('/events/create', [EventController::class, 'stor']);


// Route::get('/Ajouter', [EventController::class , "ajouterCategorie"]);
// Route::post('/ajouterCat', [EventController::class , "ajouterCat"]);



// Route::get('/Categorie/create', [CategoryController::class , "create"])->name('Admin.creatCategorie');
// Route::post('/categorie', [CategoryController::class , "store"])->name('categorie.store');
// Route::post('/categorie/create', [CategoryController::class, 'stor']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




Route::get('/dashboard',[DashboardController::class, 'index']);

Route::resource('/category', CategoryController::class);
Route::resource('/event', EventController::class);
Route::resource('/user', EventController::class);

