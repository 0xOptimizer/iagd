<?php

namespace App\Http\Controllers\Rest;

use App\Http\Controllers\Controller;
use App\Models\GlobalMeta;
use App\Models\Pets;
use App\Models\PetsDetails;
use App\Models\PetsFile;
use App\Models\PetsMeta;
use Cache;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Str;
use Validator;

class PetController extends Controller
{
    /**
     * Get all pet collection
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {

        // Initiate try and catch throwables
        try {

            // Get all pets ordered by id ASC
            $pets = Pets::with(['details', 'meta'])->orderBy('id', 'ASC')->get();

            // If collection is less than 1 or 0
            if ($pets->count() < 1) {

                return response()->json([
                    'status' => 'warning',
                    'message' => 'No pet record available.',
                    'data' => []
                ], 404);
            }

            // Return all collection on success
            return response()->json([
                'status' => 'success',
                'message' => 'Pet records available.',
                'data' => $pets
            ], 404);
        } catch (\Throwable $th) {

            // Log throwables
            \Log::error('Error fetching pets: ' . $th->getMessage());

            // Return error
            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred while fetching pets.',
                'data' => []
            ], 500);
        }
    }

    /**
     * Get specific pet base on submitted requests
     * @param Request $request
     * @return Illuminate\Http\JsonResponse
     */
    public function get(Request $request)
    {
        // Create rules
        $rules = [
            'search' => 'required'
        ];

        // Create validation messages
        $validationMessage = [
            'search.required' => 'Please enter a search keyword'
        ];

        // Validate request
        $validator = Validator::make($request->all(), $rules, $validationMessage);

        // If validator fails
        if ($validator->fails()) {

            return response()->json([
                'status' => 'warning',
                'message' => $validator->errors()->first()
            ], 200);
        }

        // Declare variables
        $searchTerm = $request->input('search');

        // Search pet
        $pets = Pets::with('details')
            ->whereFullText(['pet_name', 'pet_type'], $searchTerm)
            ->get();

        // Search pet details
        if ($pets->isEmpty()) {
            $pets = PetsDetails::with('pet')
                ->whereFullText(['iagd_number'], $searchTerm)
                ->get()
                ->map(function ($details) {

                    // Get pet data and remove nested 'pet' from details
                    $pet = $details->pet;

                    // Convert details to array and remove 'pet'
                    $detailsArray = $details->toArray();
                    unset($detailsArray['pet']);

                    // Combine as consistent structure
                    return collect($pet)->merge([
                        'details' => $detailsArray
                    ]);
                });
        }

        // Check if pet is empty
        if ($pets->isEmpty()) {

            return response()->json([
                'status' => 'warning',
                'message' => 'No pet found'
            ], 200);

        }

        // Return json success
        return response()->json([
            'status' => 'success',
            'message' => 'Pet found',
            'data' => $pets
        ], 200);
    }

    /**
     * Create pet
     * @param Request $request
     * @return Illuminate\Http\JsonResponse
     */
    public function create(Request $request)
    {
        $validator = $this->validatePetCreateRequest($request);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'warning',
                'message' => $validator->errors()->first()
            ], 422);
        }

        DB::beginTransaction();

        $uuid = (string) Str::uuid();

        try {
            $nextIagdMeta = GlobalMeta::where('meta_key', 'next_iagd_number')
                ->lockForUpdate()
                ->first();

            if (! $nextIagdMeta) {
                throw new \Exception('Invalid or missing next_iagd_number in GlobalMeta.');
            }

            $nextIagdNumber = (int) $nextIagdMeta->meta_value;
            $year = date('Y');
            $fixedPart = '002';

            if ($nextIagdNumber > 0xFFFF) {
                throw new \Exception('Maximum IAGD number reached.');
            }

            $hexValue = str_pad(dechex($nextIagdNumber), 4, '0', STR_PAD_LEFT);
            $formattedIagdNumber = "{$year}-{$fixedPart}-{$hexValue}";

            $pet = Pets::create([
                'uuid'     => $uuid,
                'pet_name' => $request->input('pet_name'),
                'pet_type' => $request->input('pet_type'),
                'image'    => null,
            ]);

            PetsMeta::create([
                'uuid'          => $uuid,
                'status'        => 1,
                'from_system'   => 'website',
                'inserted_by'   => auth()->user()->name ?? 'self',
                'date_inserted' => now(),
                'date_added'    => now(),
            ]);

            $destination = public_path("uploads/pets/{$uuid}");
            if (! File::isDirectory($destination)) {
                File::makeDirectory($destination, 0755, true);
            }

            $firstImagePath = null;

            if ($request->hasFile('pet_images')) {
                foreach ($request->file('pet_images') as $image) {
                    if (! $image->isValid()) {
                        throw new \Exception('One of the uploaded images is invalid.');
                    }

                    $extension = $image->getClientOriginalExtension();
                    $filename  = Str::random(32) . '.' . $extension;
                    $fullPath  = "uploads/pets/{$uuid}/{$filename}";

                    $image->move($destination, $filename);

                    PetsFile::create([
                        'uuid'             => (string) Str::uuid(),
                        'attached_to_uuid' => $uuid,
                        'file_name'        => $filename,
                        'file_path'        => $fullPath,
                        'file_type'        => Str::upper($extension),
                        'file_size'        => $image->getSize(),
                        'file_extension'   => "." . $extension,
                        'file_mime_type'   => $image->getMimeType(),
                        'file_hash'        => sha1_file($destination . DIRECTORY_SEPARATOR . $filename),
                        'status'           => 1,
                    ]);

                    if (! $firstImagePath) {
                        $firstImagePath = $fullPath;
                    }
                }
            }

            PetsDetails::create([
                'uuid'                 => $uuid,
                'breed'                => $request->input('breed'),
                'iagd_number'          => $formattedIagdNumber,
                'stars'                => $request->input('stars'),
                'owner'                => $request->input('owner'),
                'owner_uuid'           => (string) Str::uuid(),
                'co_owner'             => $request->input('co_owner'),
                'co_owner_uuid'        => (string) Str::uuid(),
                'pet_location'         => $request->input('pet_location'),
                'owner_location'       => $request->input('owner_location'),
                'breeder'              => $request->input('breeder'),
                'animal_facility'      => $request->input('animal_facility'),
                'animal_facility_uuid' => $request->input('animal_facility_uuid'),
                'gender'               => $request->input('gender'),
                'date_of_birth'        => $request->input('date_of_birth'),
                'markings'             => $request->input('markings'),
                'colors_body'          => $request->input('colors_body'),
                'colors_eye'           => $request->input('colors_eye'),
                'weight'               => $request->input('weight'),
                'height'               => $request->input('height'),
                'icgd_number'          => $request->input('icgd_number'),
                'link'                 => $request->input('link'),
                'male_parent'          => $request->input('male_parent'),
                'male_parent_uuid'     => (string) Str::uuid(),
                'male_parent_breed'    => $request->input('male_parent_breed'),
                'female_parent'        => $request->input('female_parent'),
                'female_parent_uuid'   => (string) Str::uuid(),
                'female_parent_breed'  => $request->input('female_parent_breed'),
                'display_status'       => 'visible',
            ]);

            GlobalMeta::updateOrCreate(
                ['meta_key'   => 'previous_iagd_number'],
                ['meta_value' => $formattedIagdNumber]
            );

            GlobalMeta::updateOrCreate(
                ['meta_key'   => 'current_iagd_number'],
                ['meta_value' => $formattedIagdNumber]
            );

            $nextIagdMeta->meta_value = $nextIagdNumber + 1;
            $nextIagdMeta->save();

            if ($firstImagePath) {
                $pet->image = $firstImagePath;
                $pet->save();
            }
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json([
                'status'  => 'error',
                'message' => $th->getMessage()
            ], 500);
        }

        DB::commit();

        $load_pet = $pet->load([
            'images',
            'details',
            'meta'
        ]);

        return response()->json([
            'status'  => 'success',
            'message' => 'New pet added.',
            'data'    => $load_pet
        ], 200);
    }

    private function validatePetCreateRequest(Request $request)
    {
        return Validator::make($request->all(), [
            'pet_name'        => 'required|string|max:255',
            'pet_type'        => 'required|string|max:255',
            'breed'           => 'nullable|string|max:255',
            'pet_images'      => 'nullable|array',
            'pet_images.*'    => 'file|mimes:jpeg,jpg,png,gif,bmp,webp,jfif,svg|max:65536',
            'stars'           => 'nullable|integer',
            'owner'           => 'nullable|string|max:255',
            'co_owner'        => 'nullable|string|max:255',
            'pet_location'    => 'nullable|string|max:255',
            'owner_location'  => 'nullable|string|max:255',
            'breeder'         => 'nullable|string|max:255',
            'animal_facility' => 'nullable|string|max:255',
            'gender'          => 'nullable|string|max:50',
            'date_of_birth'   => 'nullable|date',
            'markings'        => 'nullable|string',
            'colors_body'     => 'nullable|string',
            'colors_eye'      => 'nullable|string',
            'weight'          => 'nullable|numeric',
            'height'          => 'nullable|numeric',
            'icgd_number'     => 'nullable|string|max:255',
            'link'            => 'nullable|url',
            'male_parent'     => 'nullable|string|max:255',
            'male_parent_breed'=> 'nullable|string|max:255',
            'female_parent'   => 'nullable|string|max:255',
            'female_parent_breed'=> 'nullable|string|max:255',
            'animal_facility_uuid' => 'nullable|string|uuid',
        ]);
    }

    public function update(Request $request) {}

    public function delete(Request $request)
    {
        $rules = [
            'id' => 'required'
        ];
        $validationMessage = [
            'id.required' => 'ID not found.'
        ];

        $validator = Validator::make($request->all(), $rules, $validationMessage);

        if ($validator->fails()) {

            return response()->json([
                'status' => 'warning',
                'message' => $validator->errors()->first()
            ], 422);
        }


        $delete = Pets::find($request->input('id'));

        if (!$delete) {
            return response()->json([
                'status' => 'warning',
                'message' => "Pet not found."
            ], 404);
        }

        if (!$delete->delete()) {

            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete pet.'
            ], 500);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Pet deleted.'
        ], 200);
    }
}
