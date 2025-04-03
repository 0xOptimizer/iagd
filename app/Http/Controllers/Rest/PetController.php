<?php

namespace App\Http\Controllers\Rest;

use App\Http\Controllers\Controller;
use App\Models\Pets;
use Illuminate\Http\Request;
use Validator;

class PetController extends Controller
{
    public function get(Request $request) {

        try {
            // Apply eager loading more efficiently with a single "with" call
            // Add pagination for better performance with large datasets
            $perPage = $request->input('per_page', 15); // Default to 15 items per page

            $petsQuery = Pets::with(['details', 'meta'])
                ->orderBy('id', 'ASC');

            // Allow optional filtering if needed
            if ($request->has('filter')) {
                $filter = $request->input('filter');
                // Add your filtering logic here
                // Example: $petsQuery->where('type', $filter);
            }

            // Get paginated results
            $pets = $petsQuery->paginate($perPage);

            // Check if no pets found
            if ($pets->isEmpty()) {
                return response()->json([
                    'status' => 'warning',
                    'message' => 'No pets found.',
                    'data' => []
                ], 404);
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Pets data available.',
                'data' => $pets->items(),
                'meta' => [
                    'current_page' => $pets->currentPage(),
                    'last_page' => $pets->lastPage(),
                    'per_page' => $pets->perPage(),
                    'total' => $pets->total()
                ]
            ], 200);
        } catch (\Exception $e) {
            // Log the error
            \Log::error('Error fetching pets: ' . $e->getMessage());

            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred while fetching pets.',
                'error' => config('app.debug') ? $e->getMessage() : 'Server error'
            ], 500);
        }
    }

}
