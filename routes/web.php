<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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

// Test route toegevoegd
Route::get('/test', function () {

    return view('test');

});