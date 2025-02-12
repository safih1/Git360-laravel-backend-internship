@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        @include('_message')
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-12">
                <div class="wrapper bg-light p-4 rounded">
                    <div class="text-center text-uppercase text-white bg-primary rounded-sm mb-3">
                        <span>Login</span>
                    </div>

                    <form action="{{route('login_post')}}" method="POST">
                        @csrf

                        <!-- Email Input -->
                        <div class="form-group">
                            <label for="email" class="font-weight-bold">Email</label>
                            <input type="email" value="{{ old('email') }}" name="email" id="email" class="form-control" placeholder="Email" required>
                        </div>

                        <!-- Password Input -->
                        <div class="form-group">
                            <label for="password" class="font-weight-bold">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                        </div>

                        <!-- Forgot Password Link -->
                        <div class="form-group">
                            <a href="{{ route('forgot-password') }}" class="btn btn-link">Forgot password?</a>
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-primary w-100">Login</button>
                        </div>

                        <!-- Signup and Welcome Links -->
                        <div class="form-group text-center">
                            <p>Don't have an account? <a href="{{ route('register') }}" class="btn btn-link">Join Now</a></p>
                            <p><a href="{{ route('home') }}" class="btn btn-info btn-sm">Home</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
