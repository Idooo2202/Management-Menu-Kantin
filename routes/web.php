<?php

use App\Http\Controllers\MenuKantinController;
use Illuminate\Support\Facades\Route;

Route::resource('menukantin', MenuKantinController::class);


Route::get('/', function() {
    return view('home');
})->name('home');

Route::get('/about', function() {
    return view('about');
})->name('about');

Route::get('/menukantin', [MenuKantinController::class, 'index'])->name('menukantin.index');

Route::resource('menukantin', MenuKantinController::class)->except('index');