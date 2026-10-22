<?php

use App\Http\Controllers\MenuKantinController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::resource('menukantin', MenuKantinController::class)
    ->parameters(['menukantin' => 'menuKantin']);
