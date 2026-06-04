<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'landing')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    // Route::view('/home', 'pages.home');
    Route::livewire('/dashboard', 'pages::dashboard')->name('dashboard');
    // Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
