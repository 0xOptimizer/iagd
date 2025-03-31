<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Validator;

class AuthController extends Controller
{
    /**
     * Login validation for admins
     *
     * **Highlights**
     * - Validate request
     * - Attempt to authenticate admin using email address & password
     * - Return JSON data
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {

        // Create validation rules
        $rules = [
            'email_address' => 'required|email',
            'password' => 'required'
        ];
        // Create validation message
        $validationMessage = [
            'email_address.required' => 'Please enter your email address.',
            'email_address.email' => 'Please enter a valid email address.',
            'password.required' => 'Please enter your password.'
        ];

        // Validater request
        $validator = Validator::make($request->all(), $rules, $validationMessage);

        // If validation fails
        if ($validator->fails()) {

            return response()->json([
                'status' => 'warning',
                'message' => $validator->errors()->first()
            ], 422);
        }

        // Check if admin exist
        $admin = User::where('email_address', $request->input('email_address'))->first();

        if (!$admin) {

            return response()->json([
                'status' => 'warning',
                'message' => 'Admin not found!'
            ], 404);
        }

        // Check if admin is true
        if ($admin->is_admin !== 1) {

            return response()->json([
                'status' => 'warning',
                'message' => 'Unauthorized!'
            ], 403);
        }

        // Get only email address & password in request
        $credentials = $request->only(['email_address', 'password']);

        // If credentials failed to authenticate
        if (!Auth::attempt($credentials)) {

            return response()->json([
                'status' => 'warning',
                'message' => 'Invalid credentials! Please try again.'
            ], 401);
        }

        // Admin authenticated successfully
        return response()->json([
            'status' => 'success',
            'message' => 'Logged in successfully!'
        ], 200);
    }

    public function logout(Request $request)
    {

        try {
            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return response()->json([
                'status' => 'success',
                'message' => 'Logout successfully!'
            ], 200);

        } catch (\Throwable $th) {

            return response()->json([
                'status' => 'warning',
                'message' => $th->getMessage()
            ], 500);

        }
    }
}
