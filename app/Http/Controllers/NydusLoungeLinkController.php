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

        $query = NydusLoungeLink::where('nydus_initiate_token', $initiateToken)->limit(2);
        $records = $query->get();

        if ($records->count() !== 1) {
            return response()->json(['success' => false, 'message' => 'Data unavailable, expired, or data integrity issue.'], 404);
        }

        $record = $records->first();

        DB::beginTransaction();

        try {
            if (!$record || !$record instanceof NydusLoungeLink) {
                DB::rollBack();
                return response()->json(['success' => false, 'message' => 'Record invalid or already deleted.'], 404);
            }

            $recordData = $record->toArray();

            $deleted = $record->delete();

            if (!$deleted) {
                DB::rollBack();
                return response()->json(['success' => false, 'message' => 'Deletion failed'], 500);
            }

            DB::commit();
            return response()->json(['success' => true, 'data' => $recordData], 200);
        } catch (\Throwable $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'error' => 'Unexpected error', 'details' => $e->getMessage()], 500);
        }
    }
}