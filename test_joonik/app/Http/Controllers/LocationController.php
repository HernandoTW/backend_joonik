<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    // Simulamos cargue de sedes
    private $locations = [
        [
            'code' => 1,
            'name' => 'Sede Central Bogotá',
            'image' => 'https://via.placeholder.com/150',
            'creationDate' => '2020-01-01',
        ],
        [
            'code' => 2,
            'name' => 'Sede Sur',
            'image' => 'https://via.placeholder.com/150',
            'creationDate' => '2021-05-15',
        ],
        [
            'code' => 3,
            'name' => 'Sede Costa Norte',
            'image' => 'https://via.placeholder.com/150',
            'creationDate' => '2022-03-10',
        ],
        ,
        [
            'code' => 4,
            'name' => 'Sede Oriental',
            'image' => 'https://via.placeholder.com/150',
            'creationDate' => '2022-03-10',
        ],
        ,
        [
            'code' => 5,
            'name' => 'Sede Costa Pacífica',
            'image' => 'https://via.placeholder.com/150',
            'creationDate' => '2022-03-10',
        ],
    ];

    // Listamos las sedes
    public function index(Request $request)
    {
        // Validamos API Key
        $apiKey = $request->header('API-Key');
        if ($apiKey !== env('API_KEY')) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return response()->json($this->locations);
    }
}
