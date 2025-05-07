<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Redirections;
use Illuminate\Http\Request;
use JavaScript;
use Str;
use URL;
use Validator;

class RedirectionsController extends Controller
{
    public function index()
    {

        $data = [
            'title' => 'Pets | International Animals Genetic Database (v2!)',
        ];

        JavaScript::put([
            'urlBase' => URL::to('/'),
            'assetUrl' => asset('/'),
        ]);
        return view('admin.redirections', $data);

    }

    public function all(Request $request) {



        $query = Redirections::query();


        // Count and paginate
        $total = $query->count();

        $redirections = $query
            // ->offset($request->input('start'))
            // ->limit($request->input('length'))
            ->get();

        return response()->json([
            'draw' => intval($request->input('draw')),
            'recordsTotal' => $total,
            'recordsFiltered' => $total,
            'data' => $redirections->map(function ($redirect) {
                return [
                    'id' => $redirect->id,

                    "request_from" => $redirect->request_from ?? null,
                    'redirect_to' => $redirect->redirect_to ?? null,

                ];
            }),
        ]);

    }

    public function get (Request $request) {

        $validator = Validator::make($request->input('url'),[
            'url' => 'required'
        ],[
            'url.required' => 'Please enter search string.'
        ]);

        $redirections = Redirections::where('request_from', 'LIKE', '%'.$request->input('url').'%')
        ->orWhere('redirect_to', 'LIKE', '%'.$request->input('url').'%')
        ->get();

        if ($redirections->isEmpty()) {

            return response()->json([
                'status' => 'warning',
                'message' => "Redirection is empty."
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'message' => "Redirections found."
        ], 200);

    }

    public function store(Request $request) {
        $rules = [
            'request_from' => 'required',
            'redirect_to' => 'required'
        ];

        $validationMessage = [
            'request_from.required' => 'Please enter request from url.',
            'redirect_to.required' => 'Please enter redirect to url.'
        ];

        $validator = Validator::make($request->all(),$rules,$validationMessage);

        if ($validator->fails()) {

            return response()->json([
                'status' => 'warning',
                'message' => $validator->errors()->first()
            ], 422);
        }

        $create = Redirections::create([
            'uuid' => Str::uuid(),
            'request_from' => $request->input("request_from"),
            'redirect_to' => $request->input("redirect_to"),
        ]);

        if (!$create) {

            return response()->json([
                'status' => 'error',
                'message' => "Something's wrong! Please try again later."
            ], 500);

        }

        return response()->json([
            'status' => 'success',
            'message' => "New redirection added.",
            'data' => $create
        ], 200);

    }

    public function update (Request $request) {

    }

    public function destroy(Request $request) {

        $rules = [
            'id' => 'required'
        ];

        $validationMessage = [
            'id.required' => 'Invalid request! Please try again later.'
        ];

        $validator = Validator::make($request->all(),$rules,$validationMessage);

        if ($validator->fails()) {

            return response()->json([
                'status' => 'warning',
                'message' => $validator->errors()->first()
            ] , 422);
        }

        $delete = Redirections::find($request->input('id'));
        if (!$delete) {

            return response()->json([
                'status' => 'warning',
                'message' => 'Record not found.'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Record deleted successfull.'
        ], 200);
    }
}
