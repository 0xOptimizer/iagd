<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pets;
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
        $query = Pets::with('details');

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
        if (in_array($orderColumn, ['id', 'pet_name', 'pet_type'])) {
            $query->orderBy($orderColumn, $orderDirection);
        }

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
                    "status" => $pet->status,
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

        // If pet not deleted
        if (!$pet->delete()) {

            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete pet.'
            ], 500);
        }

        // If pet is deleted
        return response()->json([
            'status' => 'success',
            'message' => 'Pet deleted successfully.'
        ], 200);
    }
}
