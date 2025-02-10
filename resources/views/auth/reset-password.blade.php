@extends('layouts.app')
@section('content')
    <div class = "container">

        @include('_message')
        <div class = "wrapper">
            <div class = "title">
                <span>Reset Password</span>
            </div>
            <form action="{{route('reset-password').$token}}" method="POST">
                
                @csrf
                <i>
                    <input type="password"  name="password" id="password" placeholder="Password" required>   

                </i>
                <i>
                    <input type="password" name="confirmpassword" id="Confirmpassword" placeholder="Confirm Password" required> 

                </i>       
                <div>
                    <input type="submit" value="Reset Password">
                </div>
               
            </form>
        </div>
    </div>
        
    
@endsection