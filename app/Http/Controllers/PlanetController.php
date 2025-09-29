<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;

class PlanetController extends Controller
{
    
    private array $planets = [
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

    
    // Enkel de index dus code hoeft niet ingewikkeld
    public function index() {
    $intro = "Here you will see the names and descriptions of four magnificent planets";
    
    return view('planets', ["intro" => $intro, "planets" => $this->planets]);

    }

    public function show($planet) {

        $normalizedPlanet = ucfirst(strtolower($planet));

        $selectedPlanet = collect($this->planets)->firstWhere('name', $normalizedPlanet);

        return view('planets-select', ['planet' => $selectedPlanet]);
    
    }
}
