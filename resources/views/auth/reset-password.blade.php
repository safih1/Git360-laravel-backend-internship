@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        @include('_message')

        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-12">
                <div class="wrapper p-4 rounded shadow bg-light mb-4">
                    <div class="title text-center mb-4">
                        <h3>Reset Password</h3>
                    </div>

                    <form action="{{ route('reset-password') . $token }}" method="POST" class="mt-4">
                        @csrf
                        
                        <!-- Password Input -->
                        <div class="form-group">
                            <label for="password" class="form-label">New Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter new password" required>
                        </div>

                        <!-- Confirm Password Input -->
                        <div class="form-group">
                            <label for="Confirmpassword" class="form-label">Confirm Password</label>
                            <input type="password" name="confirmpassword" id="Confirmpassword" class="form-control" placeholder="Confirm your new password" required>
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group text-center mt-4">
                            <button type="submit" class="btn btn-primary">Reset Password</button>
                        </div>

                        <!-- Additional Links -->
                        <div class="text-center mt-3">
                            <p>If you remember your password, <a href="{{ route('login') }}" class="btn btn-link">Sign In</a></p>
                            <p><a href="{{ route('home') }}" class="btn btn-link">Go to Home</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
