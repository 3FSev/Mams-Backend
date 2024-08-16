<?php

use Illuminate\Support\Facades\Route;

Route::get('/{any}', function () {
    return view('welcome'); // Your Blade template that includes the React app
})->where('any', '.*');
