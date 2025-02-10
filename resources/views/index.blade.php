@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="wrapper p-4 rounded shadow">  </div>
            <div class="wrapper p-4 rounded shadow">
                <div class="title text-center mb-4">
                    <span>Home</span>
                </div>

                @if(Auth::check())
                    @if (Auth::user()->is_role == 1)
                        <div class="text-center">
                            Admin is already logged in <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                        </div>
                    @elseif (Auth::user()->is_role == 0)
                        <div class="text-center">
                            User is already logged in <a href="{{ route('user.dashboard') }}">Dashboard</a>
                        </div>
                    @endif
                @else
                    <div class="text-center mb-2">
                        <div class="signup-link">
                            Sign In: <a href="{{ route('login') }}">Login</a>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="signup-link">
                            Join Now: <a href="{{ route('register') }}">Registration</a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection