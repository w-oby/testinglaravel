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

    $intro = "Here you will see the names and descriptions of four magnificent planets";

    $planets = [
        [
            'name' => 'Mars',
            'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.'
        ],
        [
            'name' => 'Venus',
            'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.'
        ],
        [
            'name' => 'Earth',
            'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far thats inhabited by living things.'
        ],
        [
            'name' => 'Jupiter',
            'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.'
        ],
    ];

    if (request()->has('planet')) {

        $chosenPlanet = ucfirst(request('planet'));

        $filteredPlanets = collect($planets)
            ->where('name', $chosenPlanet)
            ->toArray();

    } else {

        $filteredPlanets = $planets;

    }

    return view('planets', ["intro" => $intro, "planets" => $filteredPlanets]);

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