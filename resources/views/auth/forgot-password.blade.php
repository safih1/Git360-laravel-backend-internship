@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        @include('_message')

        <div class="wrapper p-4 rounded shadow bg-light mb-4">
            <div class="title text-center mb-4">
                <h3>Forgot Password</h3>
            </div>

            <form action="{{ route('forgot-password-post') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required value="{{ old('email') }}">
                </div>

                <div class="form-group text-center mt-4">
                    <button type="submit" class="btn btn-primary">Verify</button>
                </div>

                <div class="text-center mt-3">
                    <p>If you don't have an account, <a href="{{ route('register') }}" class="btn btn-link">Join Now</a></p>
                    <p>Already have an account? <a href="{{ route('login') }}" class="btn btn-link">Sign In</a></p>
                    <p><a href="{{ route('home') }}" class="btn btn-link">Go to Home</a></p>
                </div>
            </form>
        </div>
    </div>
@endsection
