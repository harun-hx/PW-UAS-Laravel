<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Middleware-like check for Admin status
    private function checkAdmin($user) {
        if (!$user->is_admin) {
            abort(403, 'Unauthorized action.');
        }
    }

    // GET: List all users
    public function index(Request $request) {
        $this->checkAdmin($request->user());
        return User::all();
    }

    // POST: Create a user manually (e.g., creating another admin)
    public function store(Request $request) {
        $this->checkAdmin($request->user());

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'is_admin' => 'boolean'
        ]);

        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => $request->is_admin ?? false
        ]);
    }

    // PUT: Update user details
    public function update(Request $request, $id) {
        $this->checkAdmin($request->user());

        $user = User::findOrFail($id);
        
        $request->validate([
            'name' => 'sometimes|required',
            'email' => 'sometimes|required|email|unique:users,email,'.$id,
            'is_admin' => 'boolean'
        ]);

        $user->update($request->only(['name', 'email', 'is_admin']));

        // Only update password if provided
        if ($request->filled('password')) {
            $user->update(['password' => Hash::make($request->password)]);
        }

        return $user;
    }

    // DELETE: Delete a user
    public function destroy(Request $request, $id) {
        $this->checkAdmin($request->user());

        // Prevent admin from deleting themselves
        if ($request->user()->id == $id) {
            return response()->json(['message' => 'You cannot delete yourself!'], 400);
        }

        User::destroy($id);
        return response()->json(['message' => 'User deleted successfully']);
    }
}