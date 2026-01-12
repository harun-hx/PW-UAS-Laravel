<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    private function checkAdmin($user) {
        if (!$user->is_admin) {
            abort(403, 'Unauthorized action.');
        }
    }

    public function index(Request $request) {
        $this->checkAdmin($request->user());
        return User::all();
    }

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

    public function update(Request $request, $id) {
        $this->checkAdmin($request->user());

        $user = User::findOrFail($id);
        
        $request->validate([
            'name' => 'sometimes|required',
            'email' => 'sometimes|required|email|unique:users,email,'.$id,
            'is_admin' => 'boolean'
        ]);

        $user->update($request->only(['name', 'email', 'is_admin']));

        if ($request->filled('password')) {
            $user->update(['password' => Hash::make($request->password)]);
        }

        return $user;
    }

    public function destroy(Request $request, $id) {
        $this->checkAdmin($request->user());

        if ($request->user()->id == $id) {
            return response()->json(['message' => 'You cannot delete yourself!'], 400);
        }

        User::destroy($id);
        return response()->json(['message' => 'User deleted successfully']);
    }
}