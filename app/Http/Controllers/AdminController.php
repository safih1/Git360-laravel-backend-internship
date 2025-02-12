<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    // Search by name
    public function search(Request $request)
    { 
        $name = $request->input('search');
        $users = User::where('name',$name)->where('is_role' , 0)->get();
        return view('admin.dashboard', ['users' => $users]);
    }

    // View user
    public function view(string $id)
    {
    $users = User::where('id', $id)->first();

    if (!$users) {
        return redirect()->route('home')->with('error', 'User not found');
    }
    return view('admin.view', compact('users'));
    }

    // Add user
    public function adduser()
    {

        return view('admin.adduser');
    }

    // Delete user
    public function delete(string $id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('home')->with('error', 'User not found');
        }

        $user->delete();

        return redirect()->route('admin.dashboard')->with('success', 'User deleted successfully');
    }



}
