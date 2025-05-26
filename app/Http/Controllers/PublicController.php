<?php

namespace App\Http\Controllers;

use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;
use App\Models\Pets;
use App\Models\Species;
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

    function pet_profile($species_id, $iagd_number) {
        $pet = Pets::with(['details', 'meta', 'files'])
            ->where('pet_type', $species_id)
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

    function species($species_id) {
        $key_map = [
            10 => 'dogs',
            11 => 'cats',
            12 => 'rabbits',
            13 => 'birds'
        ];

        $icon_map = [
            'dogs' => 'mayor_icons_dog.png',
            'cats' => 'mayor_icons_cat.png',
            'rabbits' => 'mayor_icons_rabbit.png',
            'birds' => 'mayor_icons_bird.png'
        ];

        if (!array_key_exists($species_id, $key_map)) {
            abort(404, 'Species not found');
        }

        $species = Species::find($species_id);
        if (!$species) {
            abort(404, 'Species not found in database');
        }

        $species_key = $key_map[$species_id];
        $species_name = ucfirst($species_key);

        $data = [
            'title' => "{$species_name} — IAGD",
            'species_id' => $species_id,
            'species_name' => $species_name,
            'species_icon' => asset("images/{$icon_map[$species_key]}")
        ];

        return view('species', $data);
    }
}