<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanetController;

// Standaard pagina op localhost:8000 dus geen specifiek url na /
Route::get('/', function () {
    return view('welcome');
});

// Test route toegevoegd
Route::get('/test', function () {

    return view('test');

});

// Eigen test Route toegevoegd
Route::get('/greeting', function () {

    return "Howdy there, World!";

});

// // Eigen opdracht Route toegevoegd
// Route::get('/planets', function () {

//     $intro = "Here you will see the names and descriptions of four magnificent planets";

//     $planets = [
//         [
//             'name' => 'Mars',
//             'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.'
//         ],
//         [
//             'name' => 'Venus',
//             'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.'
//         ],
//         [
//             'name' => 'Earth',
//             'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far thats inhabited by living things.'
//         ],
//         [
//             'name' => 'Jupiter',
//             'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.'
//         ],
//     ];

//     if (request()->has('planet')) {

//         $chosenPlanet = ucfirst(request('planet'));

//         $filteredPlanets = collect($planets)
//             ->where('name', $chosenPlanet)
//             ->toArray();

//     } else {

//         $filteredPlanets = $planets;

//     }

//     return view('planets', ["intro" => $intro, "planets" => $filteredPlanets]);

// });

// // Dynamic Route voor planets
// Route::get('/planets/{planet}', function ($planet) {

//     $planets = [
//         [
//             'name' => 'Mars',
//             'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.'
//         ],
//         [
//             'name' => 'Venus',
//             'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.'
//         ],
//         [
//             'name' => 'Earth',
//             'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far thats inhabited by living things.'
//         ],
//         [
//             'name' => 'Jupiter',
//             'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.'
//         ],
//     ];

//     // Zo blijven de bestaande urls nog werken, ook al heb je bijvoorbeeld "juPiTer" ingevoerd.
//     function stringCheck($input) {

//         $lowerString = strtolower($input);

//         $uppercasePlanet = ucfirst($lowerString);
        
//         return $uppercasePlanet;

//     }

//     $normalizedPlanet = stringCheck($planet);

//     // Collections en filteren op eerste result dat geselecteerde planeet naam heeft
//     $selectedPlanet = collect($planets)->firstWhere('name', $normalizedPlanet);

//     return view('planets-select', ['planet' => $selectedPlanet]);

// });


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

// PlanetController index Route
Route::get('/planets', [PlanetController::class, 'index']);

// PlanetController show Route
Route::get('/planets/{planet}', [PlanetController::class, 'show']);