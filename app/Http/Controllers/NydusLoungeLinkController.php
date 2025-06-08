<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\NydusLoungeLink;

class NydusLoungeLinkController extends Controller
{
    public function callback(Request $request)
    {
        $validated = $request->validate([
            'nydus_initiate_token' => 'required|string',
            'nydus_network_token' => 'required|string',
            'callback_url' => 'required|string',
            'database_id' => 'required|numeric',
            'user_uuid' => 'required|string',
        ]);

        try {
            $data = $request->only((new NydusLoungeLink)->getFillable());
            $record = NydusLoungeLink::create($data);

            return response()->json(['success' => true, 'data' => $record], 201);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

    public function poll(Request $request)
    {
        $initiateToken = $request->query('token');

        if (!is_string($initiateToken) || trim($initiateToken) === '') {
            return response()->json(['success' => false, 'message' => 'Valid initiate token is required'], 400);
        }

        $record = NydusLoungeLink::where('nydus_initiate_token', $initiateToken)->first();

        if (!$record) {
            return response()->json(['success' => false, 'message' => 'Data unavailable or expired.'], 404);
        }

        $now = now();
        $createdAt = $record->created_at ?? $record->updated_at;

        if (!$createdAt || $now->diffInSeconds($createdAt) > 180) {
            return response()->json(['success' => false, 'message' => 'Token expired.'], 404);
        }

        return response()->json(['success' => true, 'data' => $record], 200);
    }
}