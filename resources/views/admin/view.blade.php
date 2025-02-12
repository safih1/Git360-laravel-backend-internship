@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6 col-md-8 col-sm-12">
            <div class="wrapper bg-light p-4 rounded-sm shadow-sm">
                <h2 class="text-center text-primary mb-4">User Details</h2>
                <div class="form-group">
                    <strong><label for="user_id">ID:</label></strong>
                    <p id="user_id">{{ $users->id }}</p>
                </div>

                <div class="form-group">
                    <strong><label for="user_name" class="fw-bold" >Name:</label></strong>
                    <p id="user_name">{{ $users->name }}</p>
                </div>

                <div class="form-group">
                    <strong><label for="user_email " class="fw-bold">Email:</label></strong>
                    <p id="user_email">{{ $users->email }}</p>
                </div>

                <div class="form-group">
                   <strong> <label for="user_created_at" class="fw-bold">Created At:</label></strong>
                    <p id="user_created_at">{{ $users->created_at }}</p>
                </div>

                <div class="form-group">
                    <strong><label for="user_updated_at" class="fw-bold">Updated At:</label></strong>
                    <p id="user_updated_at">{{ $users->updated_at }}</p>
                </div>

                <!-- Action Links -->
                <div class="text-center mt-4">
                    <a href="{{ route('logout') }}" class="btn btn-outline-danger btn-sm">Logout</a>
                    <a href="{{ route('home') }}" class="btn btn-outline-primary btn-sm ml-2">Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
