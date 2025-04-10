<?php

namespace App\Http\Controllers;

use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;
use App\Models\Pets;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

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

        $data = [
            'title' => 'Register your Pet — IAGD'
        ];

        return view($view, $data);
    }

    function pet_profile($iagd_number) {
        $pet = Pets::with(['details', 'meta', 'files'])
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
}