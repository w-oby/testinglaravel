<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

// Eigen test Route toegevoegd
Route::get('/greeting', function () {

    return "Howdy there, World!";

});

// Eigen opdracht Route toegevoegd
Route::get('/planets', function () {

    $array = ["Uranus", "Jupiter", "Mars", "Aarde", "Saturnus", "Pluto", "Neptunus", "Venus"];

    return $array;

});

// Experimenteel Route toegevoegd
Route::get('/colors', function () {

    $welcome = "Welcome to the colors page, where you will see a rather simple list of colors. Who would've thought it was this simple!";

    $array = [
        ["red"],
        ["blue"],
        ["green"],
        ["white"],
        ["black"]
    ];

    return view('colors.index', ["greeting" => $welcome, "colorList" => $array]);

});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
