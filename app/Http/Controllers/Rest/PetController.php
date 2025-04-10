<?php

namespace App\Http\Controllers\Rest;

use App\Http\Controllers\Controller;
use App\Models\Pets;
use App\Models\PetsFile;
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

    public function get(Request $request) {}

    /**
     * Create pet
     * @param Request $request
     * @return Illuminate\Http\JsonResponse
     */
    public function create(Request $request)
    {
        // Validate requests
        $validator = $this->validatePetCreateRequest($request);

        // If validation fails
        if ($validator->fails()) {

            return response()->json([
                'status' => 'warning',
                'message' => $validator->errors()->first()
            ], 422);
        }

        // Begin transaction
        DB::beginTransaction();

        // Set uuid
        $uuid = (string) Str::uuid(); // Unique identifier for linking the records

        // Try and catch errors
        try {
            // Insert new pet collection
            $pet = Pets::create([
                'uuid' => $uuid,
                'pet_name' => $request->input('pet_name'),
                'pet_type' => $request->input('pet_type'),
                'image' => null,
            ]);

            // Prepare array
            $uploadedFiles = [];

            // For each images upload then insert to collection
            foreach ($request->file('images') as $image) {

                // Create path
                $path = public_path("img/pets/$uuid");

                // Create image name
                $imgname = Str::random(32) . '.' . $image->getClientOriginalExtension();

                // Create filepath
                $filePath = "img/pets/$uuid/$imgname";

                // Insert to PetsFile collection
                $petsFile = PetsFile::create([
                    'uuid' => (string) Str::uuid(),
                    'attached_to_uuid' => $uuid,
                    'file_name' => $imgname,
                    'file_path' => $filePath,
                    'file_type' => Str::upper($image->getClientOriginalExtension()),
                    'file_size' => $image->getSize(),
                    'file_extension' => "." . $image->getClientOriginalExtension(),
                    'file_mime_type' => $image->getMimeType(),
                    'file_hash' =>  sha1_file($image->getRealPath()),
                    'status' => 1,
                ]);

                // Upload file to $path with file name $imgname
                $image->move($path, $imgname);

                // Append $filepath to array
                $uploadedFiles[] = $filePath;
            }

            // Step 2: Insert into `pets_details` table using the relationship
            // $pet->detail()->create([
            //     'uuid' => $uuid,
            //     'breed' => $request->input('pet_breed'),
            //     'iagd_number' => null,
            //     'stars' => 5,
            //     'owner' => $request->input('pet_name'),
            //     'owner_uuid' => (string) Str::uuid(),
            //     'co_owner' => 'John Smith',
            //     'co_owner_uuid' => (string) Str::uuid(),
            //     'location' => 'Cebu City, PH',
            //     'breeder' => 'Happy Paws Kennel',
            //     'animal_facility' => 'HPK Facility #1',
            //     'gender' => 'Female',
            //     'date_of_birth' => '2023-07-15',
            //     'markings' => 'White paws, black back',
            //     'colors_body' => 'Black and White',
            //     'colors_eye' => 'Blue',
            //     'weight' => '20kg',
            //     'height' => '50cm',
            //     'icgd_number' => 'ICGD78910',
            //     'link' => 'https://petregistry.com/shadow',
            //     'male_parent' => 'Alpha',
            //     'male_parent_uuid' => (string) Str::uuid(),
            //     'female_parent' => 'Luna',
            //     'female_parent_uuid' => (string) Str::uuid(),
            //     'display_status' => 'visible',
            // ]);

            // // Step 3: Insert into `pets_meta` table using the relationship
            // $pet->meta()->create([
            //     'uuid' => $uuid,
            //     'status' => 2, // Approved
            //     'from_system' => 'website',
            //     'inserted_by' => 'user_form',
            //     'date_inserted' => Carbon::now()->toDateTimeString(),
            //     'created_by' => 'admin',
            //     'date_added' => Carbon::now()->toDateTimeString(),
            //     'updated_by' => 'admin',
            //     'date_updated' => Carbon::now()->toDateTimeString(),
            //     'deleted_by' => null,
            //     'date_deleted' => null,
            // ]);


        } catch (\Throwable $th) {

            // Rollback database transaction
            DB::rollBack();

            // Return error
            return response()->json([
                "status" => "error",
                "message" => $th->getMessage()
            ], 500);
        }

        // Commit database transaction
        DB::commit();

        // Load all pet data
        $load_pet = $pet->load([
            'images',
            'details',
            'meta'
        ]);

        // Return success with pet data
        return response()->json([
            "status" => "success",
            "message" => "New pet added.",
            "data" => $load_pet
        ], 200);
    }

    public function update(Request $request) {}

    public function delete(Request $request) {}

    /**
     * Validate request
     * @param Request $request
     * @return Illuminate\Validation\Validator
     */
    public function validatePetCreateRequest($request)
    {

        // Validation rules
        $rules = [
            // Pet rules
            'pet_name' => 'required',
            'pet_type' => 'required',

            // Pet images
            'image' => 'required|array|min:1',
            'image.*' => 'image|mimes:jpeg,jpg,png,gif|max:15000',

            // Pet details rules
            // 'breed' => 'required',
            // 'iagd_number' => 'required',
            // 'stars' => 'required',
            // 'owner' => 'required',
            // 'owner_uuid' => 'required',
            // 'co_owner' => 'required',
            // 'co_owner_uuid' => 'required',
            // 'location' => 'nullable',
            // 'breeder' => 'nullable',
            // 'animal_facility' => 'nullable',
            // 'gender' => 'nullable',
            // 'date_of_birth' => 'nullable',
            // 'markings' => 'nullable',
            // 'colors_body' => 'required',
            // 'colors_eye' => 'required',
            // 'weight' => 'nullable',
            // 'height' => 'nullable',
            // 'icgd_number' => 'nullable',
            // 'link' => 'nullable',
            // 'male_parent' => 'nullable',
            // 'male_parent_uuid' => 'nullable',
            // 'female_parent' => 'nullable',
            // 'female_parent_uuid' => 'nullable',
            // 'display_status' => 'visible',
        ];

        $validationMessage = [
            // Pet validation messages
            'pet_name.required' => 'Pet name is required.',
            'pet_type.required' => 'Pet type is required.',

            // Pet images messages
            'image.*.image' => 'Choose a valid image file.',
            'image.*.mimes' => 'Selected image format not supported.',
            'image.*.max' => 'Image file exceed the maximum file size : 15MB.',
            
            // Pet details validation messages
            // 'breed.required' => 'Breed is required.',
            // 'iagd_number.required' => 'IAGD number is required.',
            // 'stars.required' => 'Stars is required.',
            // 'owner.required' => 'Owner is required.',
            // 'owner_uuid.required' => 'Owner uuid is required.',
            // 'co_owner.required' => 'Co-owner is required.',
            // 'co_owner_uuid.required' => 'Co-owner uuid is required.',
            // 'location' => 'nullable',
        ];


        return Validator::make($request->all(), $rules, $validationMessage);
    }
}
