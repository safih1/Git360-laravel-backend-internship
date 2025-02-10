@extends('layouts.app')
@section('content')
    
    

    <div class = "container">

        @include('_message')
        <div class = "wrapper">
            <div class = "title">
                <span>Login</span>
            </div>
            <form action="{{route('login_post')}}" method="POST">
                
                @csrf
                <i>
                    <input type="email" value="{{old('email')}}" name="email" id="email" placeholder="Email" required>   

                </i>
                <i>
                    <input type="password" name="password" id="password" placeholder="Password" required> 

                </i>

                
              
                <div>
                    <a href="{{route('forgot-password')}}">Forgot passowrd</a>
                </div>
                <div>
                    <input type="submit" value="Login">
                </div>
                <div>
                  signup-link: <a href="{{route('register')}}">Join Now</a>
                </div>
                <div>
                    welcome-link: <a href="{{route('home')}}">Home</a>
                </div>
            </form>
        </div>
    </div>
        
@endsection  
