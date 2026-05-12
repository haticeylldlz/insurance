<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Owner;

class OwnerApiController extends Controller
{
    // GET ALL
    public function index()
    {
        return response()->json([
            'status' => true,
            'data' => Owner::all()
        ]);
    }

    // GET ONE
    public function show($id)
    {
        $owner = Owner::find($id);

        if (!$owner) {
            return response()->json([
                'status' => false,
                'message' => 'Owner not found'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'data' => $owner
        ]);
    }

    // CREATE
    public function store(Request $request)
    {
        $owner = Owner::create([
            'name' => $request->name,
            'surname' => $request->surname
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Owner created',
            'data' => $owner
        ]);
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $owner = Owner::find($id);

        if (!$owner) {
            return response()->json([
                'status' => false,
                'message' => 'Owner not found'
            ], 404);
        }

        $owner->update([
            'name' => $request->name,
            'surname' => $request->surname
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Owner updated',
            'data' => $owner
        ]);
    }

    // DELETE
    public function destroy($id)
    {
        $owner = Owner::find($id);

        if (!$owner) {
            return response()->json([
                'status' => false,
                'message' => 'Owner not found'
            ], 404);
        }

        $owner->delete();

        return response()->json([
            'status' => true,
            'message' => 'Owner deleted'
        ]);
    }
}
