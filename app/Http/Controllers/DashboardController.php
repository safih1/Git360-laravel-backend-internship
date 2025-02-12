<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if(Auth::user()->is_role == 1){
            $data['getRecord'] = User::find(Auth::user()->id);
            $data['meta_title'] = 'Admin Dashboard';
            $users = User::where('is_role', 0)->get();
            return view('admin.dashboard',$data,['users' => $users]);
        }
        else if( Auth::user()->is_role == 0)
        {   
            $data['meta_title'] = 'User Dashboard';
            $data['getRecord'] = User::find(Auth::user()->id);
            return view('user.dashboard',$data);
        }
        else
        {
            return redirect()->route('login');
        }
        
    }
}
