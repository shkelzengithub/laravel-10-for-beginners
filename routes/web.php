<?php

use Illuminate\Support\Facades\Route;


// Route::view('/', 'Home');

Route::get('/', function() {
    return view('Welcome');
});
// Route::view('/', 'Welcome');
