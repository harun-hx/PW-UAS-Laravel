<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    // GET: Admin sees all, User sees their own
    public function index(Request $request) {
        if ($request->user()->is_admin) {
            return Complaint::with('user')->get(); // Admin sees everything
        }
        return Complaint::where('user_id', $request->user()->id)->get(); // User sees theirs
    }

    // POST: User creates complaint
    public function store(Request $request) {
        $request->validate(['subject' => 'required', 'message' => 'required']);

        return Complaint::create([
            'user_id' => $request->user()->id,
            'subject' => $request->subject,
            'message' => $request->message,
            'status' => 'pending'
        ]);
    }

    public function update(Request $request, $id) {
        // 1. Find the complaint
        $complaint = Complaint::findOrFail($id);

        // 2. Change status to resolved
        $complaint->update(['status' => 'resolved']);

        return response()->json(['message' => 'Complaint resolved', 'data' => $complaint]);
    }
}