@extends('layouts.app')
@section('content')
    <div class = "container">

        @include('_message')
        <div class = "wrapper">
            <div class = "title">
                <span>forgot-password</span>
            </div>
            <form action="{{route("forgot-password-post")}}" method="POST">
                @csrf

                <i>
                    <input type="email"  name="email"  id="email" placeholder="Email"  required  value={{old('email')}}>   

                </i>

               
                <div>
                    <input type="submit" value="Verify">
                </div>
                <div>
                  signup-link: <a href="{{route('register')}}">Join Now</a>
                </div>
                <div>
                    signup-link: <a href="{{route('login')}}">Sign In</a>
                  </div>
                <div>
                    welcome-link: <a href="{{route('home')}}">Home</a>
                </div>
            </form>
        </div>
    </div>
        
@endsection