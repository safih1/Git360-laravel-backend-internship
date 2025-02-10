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

    <div class="wrapper">
        <div class="title">
            <span>Home</span>
        </div>
        <form action="{{ route('registration_post') }}" method="POST">
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
                <input type="submit" value="Register">
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
@endsection
