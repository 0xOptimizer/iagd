<?php

namespace App\Http\Controllers;

use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;
use App\Models\Pets;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class APIController extends Controller
{
    function get_pets_count() {
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
            'pet_counts' => $petCounts,
            'latest_pets' => $latestPets
        ];

        return response()->json($data);
    }

    public function get_species(Request $request)
    {
        $query = Pets::with(['details', 'meta', 'files' => function ($q) {
            $q->where('file_mime_type', 'LIKE', 'image%')->orderBy('created_at');
        }])
        ->when(true, function ($query) {
            $query->whereHas('details', function ($q) {
            $q->whereNotNull('iagd_number')->where('iagd_number', '!=', '');
            });
        })
        ->orderByRaw('(SELECT iagd_number FROM pets_details WHERE pets_details.uuid = pets.uuid) ASC');

        if ($request->has('starts_with')) {
            $query->where('pet_name', 'LIKE', $request->input('starts_with') . '%');
        }

        if ($request->has('species')) {
            $query->where('pet_type', rtrim($request->input('species'), 's'));
        }

        $perPage = $request->input('per_page', 15);
        $pets = $query->paginate($perPage)->appends($request->all());

        $pets->getCollection()->transform(function ($pet) {
            $file = $pet->files->first();
            $pet->primary_image = $file
                ? asset('uploads/pets/' . $file->attached_to_uuid . '/' . $file->uuid . '.' . $file->file_extension)
                : null;
            return $pet;
        });

        return response()->json($pets);
    }
}