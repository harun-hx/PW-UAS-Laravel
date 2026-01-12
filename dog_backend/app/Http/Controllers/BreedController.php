<?php

namespace App\Http\Controllers;

use App\Models\Breed;
use Illuminate\Http\Request;

class BreedController extends Controller
{
    public function index() {
        return Breed::all();
    }

    public function store(Request $request) {
        if (!$request->user()->is_admin) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $fields = $request->validate([
            'breed_name' => 'required|string',
            'description' => 'required|string',
            'image_count' => 'required|integer',
            'sample_image_url' => 'nullable|url'
        ]);

        return Breed::create($fields);
    }

    public function update(Request $request, $id) {
        if (!$request->user()->is_admin) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $breed = Breed::findOrFail($id);
        $breed->update($request->all());
        return $breed;
    }

    public function destroy(Request $request, $id) {
        if (!$request->user()->is_admin) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        Breed::destroy($id);
        return response()->json(['message' => 'Breed deleted']);
    }
}