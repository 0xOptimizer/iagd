<?php

namespace App\Http\Controllers;

use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;
use App\Models\Pets;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use JavaScript;
use URL;

class PublicController extends Controller
{
    function index() {
        $data = [
            'title' => 'International Animals Genetic Database (v2!)'
        ];

        return view('front', $data);
    }

    function register(Request $request) {
        $agent = new Agent();
        $view = 'register';

        JavaScript::put([
            'urlBase' => URL::to('/'),
            'assetUrl' => asset('/')
        ]);
        
        $data = [
            'title' => 'Register your Pet — IAGD'
        ];

        return view($view, $data);
    }

    function pet_profile($pet_type, $iagd_number) {
        $pet = Pets::with(['details', 'meta', 'files'])
            ->where('pet_type', $pet_type)
            ->whereHas('details', function ($query) use ($iagd_number) {
                $query->where('iagd_number', $iagd_number);
            })
            ->first();
    
        if (!$pet) {
            abort(404, 'Pet not found');
        }
    
        $data = [
            'title' => $pet->name . ' — Pet Profile',
            'pet' => $pet
        ];
    
        return view('pets.profile', $data);
    }

    function species($species) {
        $valid_species = ['cats', 'dogs', 'rabbits', 'birds'];

        if (!in_array($species, $valid_species)) {
            abort(404, 'Species not found');
        }

        $icon_map = [
            'cats' => 'mayor_icons_cat.png',
            'dogs' => 'mayor_icons_dog.png',
            'rabbits' => 'mayor_icons_rabbit.png',
            'birds' => 'mayor_icons_bird.png'
        ];

        // capitalize first letter
        $species_name = ucfirst($species);

        $data = [
            'title' => $species_name . ' — IAGD',
            'species_name' => $species_name,
            'species_icon' => asset('images/' . $icon_map[$species]),
        ];
    
        return view('species', $data);
    }
}