<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Auth;
use App\Mail\ForgotPassword;
use Mail;
use App\Http\Request\ResetPassword;

class AuthController extends Controller
{
    public function register()
    {
        $data['meta_title'] = 'Registration';
        return view('auth.registration',$data);
    }

    public function registration_post(Request $request)
    {
        $user = request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'confirm_password' =>'required_with:password|same:password|min:6',
            'is_role' => 'required'

        ]);
        $role = $request->input('role');

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->is_role = $request->is_role;
        $user->remember_token = Str::random(20);
        $user->save();
        if($role == 'admin'){
            return redirect()->route('admin.dashboard')->with('success', 'user added successfully');
        }
        return redirect()->route('login')->with('success', 'Registration successful');
    }

    public function login()
    {
        $data['meta_title'] = 'Login';
        return view('auth.login', $data);
    }

    public function login_post(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password],true)) {
            if (Auth::user()->is_role == 1) {
               
                
                return redirect()->route('admin.dashboard');
            }
            

            else if(Auth::user()->is_role == 0)
            {
                return redirect()->route('user.dashboard');
            }
            else{
                Auth::logout();
                return redirect()->route('login')-> with('error', 'data not found');
            }  
            
        }
        else{
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
    }

    public function forgotPassword()
    {
        $data['meta_title'] = 'Forgot Password';
        return view('auth.forgot-password', $data);
    }
    public function forgotPasswordPost(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if($user){
            $user->remember_token = Str::random(20);
            $user->save();
            Mail::to($user->email)->send(new ForgotPassword($user));
            return redirect()->route('login')->with('success', 'Password reset link sent to your email');
        }
        else{
            return back()->withErrors([
                'email' => 'The provided email does not match our records.',
            ]);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }


    public function resetPassword($token)
    {
        $user = User::where('remember_token','=', $token)->first();
        if($user->count()==0){
            abort(403);
        }

        $user =$user->first();
        $data['token'] = $token;
        $data['meta_title'] = 'Reset Password';
        return redirect()->route('auth.reset',$data);
    }

    public function postReset($token,ResetPassword $request)
    {
        $user = User::where('remember_token','=',$token);
        if($user->count()==0){
            abort(403);
        }
        $user = $user->first();
        $user->password = Hash::make($request->password);
        $user->remember_token = Str::random(20);
        $user->save();
        return redirect()->route('login')->with('success', 'Password reset successful');
    }
}   


