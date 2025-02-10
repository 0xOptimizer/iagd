<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Http;
use Laracasts\Utilities\JavaScript\JavaScriptFacade;

class HrisController extends Controller
{
    public function all_records()
    {
        $token = session('auth_token');

        if (!$token) {
            return redirect('/login');
        }

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ])->post('https://mis.manalok9.com/api/v1/auth/token/validate', [
            'token' => $token,
            'with' => ['user']
        ]);

        if ($response->failed()) {
            return redirect('/login')->withErrors('Authentication failed');
        }

        $data = $response->json();

        if (isset($data['user'])) {
            $data['user'] = [
                'first_name' => $data['user']['first_name'],
                'last_name' => $data['user']['last_name'],
                'id' => $data['user']['id'],
                'uuid' => $data['user']['uuid']
            ];
        }

        return view('profiling.all_records', [
            'title' => 'All Records',
            'data' => $data
        ]);
    }
    public function qr_codes()
    {
        $token = session('auth_token');

        if (!$token) {
            return redirect('/login');
        }

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ])->post('https://mis.manalok9.com/api/v1/auth/token/validate', [
            'token' => $token,
            'with' => ['user']
        ]);

        if ($response->failed()) {
            return redirect('/login')->withErrors('Authentication failed');
        }

        $data = $response->json();

        if (isset($data['user'])) {
            $data['user'] = [
                'first_name' => $data['user']['first_name'],
                'last_name' => $data['user']['last_name'],
                'id' => $data['user']['id'],
                'uuid' => $data['user']['uuid']
            ];
        }

        return view('profiling.qr_codes', [
            'title' => 'QR Codes',
            'data' => $data
        ]);
    }
}