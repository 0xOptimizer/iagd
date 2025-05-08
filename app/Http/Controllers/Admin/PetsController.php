<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pets;
use App\Models\Species;
use Auth;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use JavaScript;
use URL;
use Validator;

class PetsController extends Controller
{
    /**
     * Show pet pages
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {

        $data = [
            'title' => 'Pets | International Animals Genetic Database (v2!)',
        ];

        JavaScript::put([
            'urlBase' => URL::to('/'),
            'assetUrl' => asset('/'),
        ]);
        return view('admin.pets', $data);
    }

    /**
     * Show pet form page
     * @return \Illuminate\Contracts\View\View
     */
    public function form()
    {

        $data = [
            'title' => 'Register Pet | International Animals Genetic Database (v2!)'
        ];

        JavaScript::put([
            'urlBase' => URL::to('/'),
            'assetUrl' => asset('/'),
        ]);
        return view('admin.pages.pets.form', $data);
    }

    /**
     * Get all pets
     * @return \Illuminate\Contracts\View\View
     */
    public function all(Request $request)
    {
        $query = Pets::with(['details', 'meta']);

        // Search
        if ($search = $request->input('search.value')) {
            $query->where('pet_name', 'like', "%{$search}%")
                ->orWhere('pet_type', 'like', "%{$search}%")
                ->orWhereHas('details', function ($q) use ($search) {
                    $q->where('iagd_number', 'like', "%{$search}%")
                        ->orWhere('owner', 'like', "%{$search}%");
                });
        }

        // Sorting
        $columns = [
            'id',
            'pet_name',
            'pet_type',
            "status",
            'owner',
            'iagd_number',
        ];

        $orderColumnIndex = $request->input('order.0.column');
        $orderDirection = $request->input('order.0.dir', 'asc');
        $orderColumn = $columns[$orderColumnIndex] ?? 'id';

        // Only sort if it's a pets column (not related)
        // if (in_array($orderColumn, ['id', 'pet_name', 'pet_type'])) {
        //     $query->orderBy($orderColumn, $orderDirection);
        // }

        $query->orderBy('id', "DESC");

        // Count and paginate
        $total = $query->count();

        $pets = $query
            // ->offset($request->input('start'))
            // ->limit($request->input('length'))
            ->get();

        return response()->json([
            'draw' => intval($request->input('draw')),
            'recordsTotal' => $total,
            'recordsFiltered' => $total,
            'data' => $pets->map(function ($pet) {
                return [
                    'id' => $pet->id,
                    'pet_name' => $pet->pet_name,
                    'pet_type' => $pet->pet_type,
                    "status" => $pet->meta->status ?? null,
                    'owner' => $pet->details->owner ?? '-',
                    'iagd_number' => $pet->details->iagd_number ?? '-',

                ];
            }),
        ]);
    }

    /**
     * Delete pet in datatable
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function dtDelete(Request $request)
    {

        // Create rules
        $rules = [
            'id' => 'required'
        ];

        // Create validation messages
        $validationMessage = [
            'id.required' => 'Something\'s wrong! Please try again.'
        ];

        // Validate request
        $validator = Validator::make($request->all(), $rules, $validationMessage);

        // If validator fails
        if ($validator->fails()) {

            return response()->json([
                'status' => 'warning',
                'message' => $validator->errors()->first()
            ], 422);
        }

        // Find pet
        $pet = Pets::find($request->input('id'));

        // If pet is empty
        if (!$pet) {

            return response()->json([
                'status' => 'warning',
                'message' => 'Pet data not found.'
            ], 404);
        }

        // Begin transaction
        DB::beginTransaction();

        if ($pet && $pet->meta) {

            // $pet->meta->status = 0;
            $pet->meta->deleted_by = Auth::user()->uuid;
            $pet->meta->date_deleted = Carbon::now();

            $pet->meta->save();
        }

        // If pet not deleted
        if (!$pet->delete()) {

            DB::rollBack();

            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete pet.'
            ], 500);
        }


        DB::commit();


        // If pet is deleted
        return response()->json([
            'status' => 'success',
            'message' => 'Pet deleted successfully.'
        ], 200);
    }

    /**
     * Approve pet registration
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function dtApprove(Request $request)
    {

        // Validation rules
        $rules = [
            'id' => 'required'
        ];

        // Validation message
        $validationMessage = [
            'id.required' => 'Invalid request! Please try again later.'
        ];

        // Request validation
        $validator = Validator::make($request->all(), $rules, $validationMessage);

        // When validation fails
        if ($validator->fails()) {

            return response()->json([
                'status' => 'warning',
                'message' => $validator->errors()->first()
            ], 422);
        }

        // Begin transaction
        DB::beginTransaction();

        // Find pet using id
        $pet = Pets::find($request->input('id'));

        // Check if pet and pet meta is empty
        if (!$pet || !$pet->meta) {
            return response()->json([
                'status' => 'warning',
                'message' => 'Pet not found!'
            ], 404);
        }

        // Update pet meta
        $pet->meta->status = 2;
        $pet->meta->updated_by = Auth::user()->uuid;
        $pet->meta->date_updated = Carbon::now();

        // Check if pet meta is saved
        if (!$pet->meta->save()) {


            return response()->json([
                'status' => 'warning',
                'message' => 'Failed to approve pet registration!'
            ], 500);
        }

        // Update updated_at column in pet
        $pet->updated_at = Carbon::now();

        // check if pet is saved
        if (!$pet->save()) {

            DB::rollback();

            return response()->json([
                'status' => 'warning',
                'message' => 'Failed to approve pet registration!'
            ], 500);
        }

        // Commit database transaction
        DB::commit();

        // Create data array
        $data = [
            'id' => $pet->id,
            'pet_name' => $pet->pet_name,
            'pet_type' => $pet->pet_type,
            "status" => $pet->meta->status ?? null,
            'owner' => $pet->details->owner ?? '-',
            'iagd_number' => $pet->details->iagd_number ?? '-',
        ];

        // Return response json with data
        return response()->json([
            'status' => 'success',
            'message' => 'Pet approved successfully!',
            'data' => $data
        ], 200);
    }

    /**
     * Check if pet exist
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function dtCheckPetId(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'id' => 'required'
        ], [
            'id.required' => 'Invalid request! Please try again later.'
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 'warning',
                'message' => $validator->errors()->first()
            ], 422);
        }

        $pet = Pets::find($request->input('id'));

        if (!$pet) {

            return response()->json([
                'status' => 'warning',
                'message' => 'Pet not found!'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Pet found.'
        ], 200);
    }
    /**
     * Description
     * @param Request $request
     * @return \Illuminate\Contracts\View\View
     */
    public function viewEdit(Request $request)
    {

        $pet = Pets::where('id', $request->input('id'))->with(['details', 'meta','images'])->first();
        $type = Species::select('name')->get();
        $data = [
            'title' => 'View / Edit Pets | International Animals Genetic Database (v2!)',
            'pet' => $pet,
            'type' => $type
        ];

        JavaScript::put([
            'urlBase' => URL::to('/'),
            'assetUrl' => asset('/'),
        ]);

        return view('admin.pages.pets.form-view-edit', $data);
    }
}
