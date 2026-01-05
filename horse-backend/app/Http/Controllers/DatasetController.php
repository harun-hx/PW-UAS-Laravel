<?php

namespace App\Http\Controllers;

use App\Models\Dataset;
use Illuminate\Http\Request;

class DatasetController extends Controller
{
    // GET: List all datasets (Public for everyone)
    public function index() {
        return Dataset::all();
    }

    // POST: Create new (Admin only)
    public function store(Request $request) {
        $fields = $request->validate([
            'breed_name' => 'required',
            'description' => 'required',
            'image_count' => 'required|integer',
            'sample_image_url' => 'nullable|url'
        ]);

        return Dataset::create($fields);
    }

    // PUT: Update (Admin only)
    public function update(Request $request, $id) {
        $dataset = Dataset::findOrFail($id);
        $dataset->update($request->all());
        return $dataset;
    }

    // DELETE: Delete (Admin only)
    public function destroy($id) {
        Dataset::destroy($id);
        return response()->json(['message' => 'Deleted']);
    }
}