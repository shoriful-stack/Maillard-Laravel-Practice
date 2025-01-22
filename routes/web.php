<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get("/",[SiteController::class, 'home'])->name('home') ; 
Route::get("/menu",[SiteController::class, 'menu'])->name('menu'); 
Route::get("/about",[SiteController::class, 'about'])->name('about'); 
Route::get("/reservations",[SiteController::class, 'reservations'])->name('res') ;