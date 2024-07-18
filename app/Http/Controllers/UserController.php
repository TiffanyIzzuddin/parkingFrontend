<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    // Read all users
    public function getUsers()
    {
        $response = Http::get('http://localhost:3000/users');
        $data = $response->json();
        // 'user' = auth()->user();
        // compact('data', 'user');
        return view('admin.dataAdminPage', ['users' => $data]);
    }

    // Read a single user
    public function getUser($id)
    {
        $response = Http::get("http://localhost:3000/users/{$id}");
        $data = $response->json();
        return view('users.show', ['user' => $data]);
    }

    public function createUser()
    {
        return view('admin.SignUpForm');
    }

    public function storeUser(Request $request)
    {
        $data = $request->only(['name', 'gender', 'no_telp', 'email', 'password']);

        // Send POST request to Node.js backend
        $response = Http::post('http://localhost:3000/users/create', $data);

        if ($response->successful()) {
            return redirect()->route('users.index')->with('message', 'User created successfully!');
        } else {
            return redirect()->route('users.index')->with('error', 'Failed to create user.');
        }
    }

    //update function
    public function updateUser(Request $request, $id)
{
    // Extract data from the request
    $data = $request->only(['name', 'gender', 'no_telp', 'email', 'password']);

    // If password is provided, hash it
    if (!empty($data['password'])) {
        $data['password'] = bcrypt($data['password']);
    } else {
        unset($data['password']); // Remove password if not provided
    }

    // Send PATCH request to Node.js backend
    $response = Http::patch("http://localhost:3000/users/update/{$id}", $data);

    // Check response
    if ($response->successful()) {
        return redirect()->route('users.index', $id)->with('message', 'User updated successfully!');
    } else {
        return redirect()->route('users.index', $id)->with('error', 'Failed to update user.');
    }
}


    public function editUser($id)
    {
        $response = Http::get("http://localhost:3000/users/{$id}");
        $user = $response->json();
        return view('admin.editForm', ['user' => $user]);
    }


    // Delete a user
    public function deleteUser($id)
    {
        $response = Http::delete("http://localhost:3000/users/delete/{$id}");
        return redirect()->back()->with('message', 'User deleted successfully!');
    }
}
