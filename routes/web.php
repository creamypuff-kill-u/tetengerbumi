<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('LandingPage');
});

Route::get('/home', function () {
    return Inertia::render('Home'); 
})->name('Home');

Route::get('/aboutus', function () {
    return Inertia::render('AboutUs'); 
})->name('AboutUs');

Route::get('/landingpage', function () {
    return Inertia::render('LandingPage'); 
})->name('LandingPage');

Route::get('/lokasi', function () {
    return Inertia::render('Lokasi'); 
})->name('Lokasi');

Route::get('/donasi', function () {
    return Inertia::render('Donasi'); 
})->name('Donasi');

Route::get('/proker', function () {
    return Inertia::render('Proker'); 
})->name('Proker');

Route::get('/walipohon', function () {
    return Inertia::render('WaliPohon'); 
})->name('WaliPohon');

Route::get('/wakafpohon', function () {
    return Inertia::render('WakafPohon'); 
})->name('WakafPohon');

Route::get('/charity', function () {
    return Inertia::render('Charity'); 
})->name('Charity');


require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

