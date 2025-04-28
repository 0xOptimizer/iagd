<?php

namespace App\Http\Controllers;

use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;
use App\Models\Pets;
use App\Models\SpeciesMeta;
use App\Models\GlobalMeta;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class APIController extends Controller
{
    function get_pets_count()
    {
        $petCounts = Cache::remember('pet_counts_by_type', 300, function () {
            return SpeciesMeta::select('species_id', DB::raw('count as total'))
                ->pluck('total', 'species_id');
        });

        $latestPets = Cache::remember('latest_pets_by_type', 300, function () {
            return SpeciesMeta::select('species_id', DB::raw('MAX(latest_entry) as latest'))
                ->groupBy('species_id')
                ->pluck('latest', 'species_id');
        });

        $total = $petCounts->sum();

        $data = [
            'pet_counts' => $petCounts,
            'latest_pets' => $latestPets,
            'total' => $total
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
            $species = rtrim($request->input('species'), 's');
            $query->where('pet_type', $species);
        } else {
            $species = null;
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

        $totalSpeciesCount = Pets::when($species, function ($q) use ($species) {
            $q->where('pet_type', $species);
        })
        ->whereHas('details', function ($q) {
            $q->whereNotNull('iagd_number')->where('iagd_number', '!=', '');
        })
        ->count();

        return response()->json([
            'data' => $pets->items(),
            'current_page' => $pets->currentPage(),
            'last_page' => $pets->lastPage(),
            'per_page' => $pets->perPage(),
            'total' => $pets->total(),
            'total_species_count' => $totalSpeciesCount
        ]);
    }

    public function get_pet_profile($type, $iagd_number)
    {
        $pets = Pets::with(['details', 'meta', 'files' => function ($q) {
            $q->where('file_mime_type', 'LIKE', 'image%')->orderBy('created_at');
        }])
        ->where('pet_type', $type)
        ->whereHas('details', function ($q) use ($iagd_number) {
            $q->where('iagd_number', 'LIKE', $iagd_number . '%');
        })
        ->get();

        if ($pets->isEmpty()) {
            return response()->json([
                'error' => 'Pet not found'
            ], 200);
        }        

        foreach ($pets as $pet) {
            $file = $pet->files->first();
            $pet->primary_image = $file
                ? asset('uploads/pets/' . $file->attached_to_uuid . '/' . $file->uuid . '.' . $file->file_extension)
                : null;
        }

        return response()->json($pets);
    }

    public function get_pet_profile_by_name($type, $name)
    {
        $pets = Pets::with(['details', 'meta', 'files' => function ($q) {
            $q->where('file_mime_type', 'LIKE', 'image%')->orderBy('created_at');
        }])
        ->where('pet_type', $type)
        ->where('pet_name', 'LIKE', $name . '%')
        ->get();

        if ($pets->isEmpty()) {
            return response()->json(['error' => 'Pet not found'], 404);
        }

        foreach ($pets as $pet) {
            $file = $pet->files->first();
            $pet->primary_image = $file
                ? asset('uploads/pets/' . $file->attached_to_uuid . '/' . $file->uuid . '.' . $file->file_extension)
                : null;
        }

        return response()->json($pets);
    }

}