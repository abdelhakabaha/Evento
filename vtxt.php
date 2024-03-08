<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecetteController;
use Illuminate\Support\Facades\Route;


Route::get('/',[RecetteController::class,'index']); 
Route::get('/create',[RecetteController::class,'create']); 
Route::post('/create    ',[RecetteController::class,'store']);