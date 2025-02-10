<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function storeToken(Request $request)
    {
        $request->validate([
            'token' => 'required|string',
        ]);

        session(['auth_token' => $request->token]);
        return response()->json(['status' => 'success', 'message' => 'Token stored successfully']);
    }

    public function logout()
    {
        session()->forget('auth_token');
        return redirect('/login');
    }
}