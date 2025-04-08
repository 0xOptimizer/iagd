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
        $petCounts = Cache::remember('pet_counts_by_type', 300, function () {
            return Pets::select('pet_type', DB::raw('count(*) as total'))
                       ->groupBy('pet_type')
                       ->pluck('total', 'pet_type');
        });

        $latestPets = Cache::remember('latest_pets_by_type', 300, function () {
            return Pets::join('pets_meta', 'pets.uuid', '=', 'pets_meta.uuid')
                       ->select('pets.pet_type', DB::raw('MAX(pets_meta.date_inserted) as latest'))
                       ->groupBy('pets.pet_type')
                       ->pluck('latest', 'pets.pet_type');
        });

        $data = [
            'title' => 'International Animals Genetic Database (v2!)',
            'pet_counts' => $petCounts,
            'latest_pets' => $latestPets
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
}
