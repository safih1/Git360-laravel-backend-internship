{{-- @extends('layouts.app')
@section('content')
<div class="container">
    <!-- Show validation error messages -->
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <span style="color:red">{{ $error }} <br></span>
        @endforeach
    @endif

    @include('_message')

    <div class="wrapper">
        <div class="title">
            <span>Add User</span>
        </div>
        <form action="{{ route('registration_post',['role'=>'admin']) }}" method="POST">
            @csrf
            <i>
                <input type="text" name="name" id="name" placeholder="Username" required value="{{ old('name') }}">
            </i>

            <i>
                <input type="email" name="email" id="email" placeholder="Email" required value="{{ old('email') }}">
            </i>

            <i>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </i>

            <i>
                <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
            </i>

            <i>
                <select name="is_role" id="" required>
                    <option value="">Select Role</option>
                    <option {{ old('is_role') == '1' ? 'selected' : '' }} value="1">Admin</option>
                    <option {{ old('is_role') == '0' ? 'selected' : '' }} value="0">User</option>
                </select>
            </i>

            <div>
                <a href="{{ route('forgot-password') }}">Forgot password</a>
            </div>

            <div>
                <input type="submit" value="Add User">
            </div>

            <div>
                signup-link: <a href="{{ route('login') }}">Login</a>
            </div>

            <div>
                welcome-link: <a href="{{ route('home') }}">Home</a>
            </div>
        </form>
    </div>
</div>
@endsection --}}







@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Show validation error messages -->
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <span style="color:red">{{ $error }} <br></span>
        @endforeach
    @endif

    @include('_message')

    <div class="row justify-content-center mt-5">
        <div class="col-lg-6 col-md-8 col-sm-12">
            <div class="wrapper">
                <div class="title text-center text-uppercase text-white bg-primary  rounded-sm">
                    <span>Add User</span>
                </div>
                <form action="{{ route('registration_post',['role'=>'admin']) }}" method="POST" class="mt-4 bg-light p-4">
                    @csrf
                    
                    <!-- Username Input -->
                    <div class="form-group">
                        <label for="name">Username</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Username" required value="{{ old('name') }}">
                    </div>

                    <!-- Email Input -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required value="{{ old('email') }}">
                    </div>

                    <!-- Password Input -->
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                    </div>

                    <!-- Confirm Password Input -->
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password" required>
                    </div>

                    <!-- Role Selection (Admin or User) -->
                    <div class="form-group">
                        <label for="is_role">Select Role</label>
                        <select name="is_role" id="is_role" class="form-control" required>
                            <option value="">Select Role</option>
                            <option {{ old('is_role') == '1' ? 'selected' : '' }} value="1">Admin</option>
                            <option {{ old('is_role') == '0' ? 'selected' : '' }} value="0">User</option>
                        </select>
                    </div>

                    <!-- Forgot Password Link -->
                    <div class="form-group">
                        <a href="{{ route('forgot-password') }}" class="btn btn-link">Forgot password</a>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group d-flex justify-content-center">
                        <button type="submit" class="btn btn-outline-primary ">Add User</button>
                    </div>

                    <!-- Signup and Welcome Links -->
                    <div class="form-group  text-center">   
                        <p>Signup Link: <a href="{{ route('login') }}">Login</a></p>
                        <p>Welcome Link: <a href="{{ route('home') }}">Home</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
