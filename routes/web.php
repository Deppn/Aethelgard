<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'landing')->name('home');

Route::view('/audition', 'audition')->name('audition');

Route::view('/merchandise', 'merchandise')->name('merchandise');
