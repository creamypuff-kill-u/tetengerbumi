<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('LandingPage'); 
})->name('LandingPage');

Route::get('/home', function () {
    return Inertia::render('Home'); 
})->name('Home');

Route::get('/aboutus', function () {
    return Inertia::render('AboutUs'); 
})->name('AboutUs');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

