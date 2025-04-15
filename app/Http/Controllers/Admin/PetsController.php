<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pets;
use Illuminate\Http\Request;
use JavaScript;
use URL;

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

        if ($search = $request->input('search.value')) {
            $query->where('pet_name', 'like', "%{$search}%")
                ->orWhere('pet_type', 'like', "%{$search}%")
                ->orWhereHas('details', function ($q) use ($search) {
                    $q->where('iagd_number', 'like', "%{$search}%")
                        ->orWhere('owner', 'like', "%{$search}%");
                });
        }

        $total = $query->count();

        $pets = $query
            ->offset($request->input('start'))
            ->limit($request->input('length'))
            ->get();

        return response()->json([
            'draw' => intval($request->input('draw')),
            'recordsTotal' => $total,
            'recordsFiltered' => $total,
            'data' => $pets->map(function ($pet) {
                return [
                    $pet->pet_name,
                    $pet->pet_type,
                    $pet->details->owner ?? '-',
                    $pet->details->iagd_number ?? '-',
                ];
            })
        ]);
    }
}
