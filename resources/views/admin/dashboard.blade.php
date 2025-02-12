@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-12">
                <div class="wrapper bg-light p-4 rounded">
                    <div class="text-center text-uppercase text-white bg-primary rounded-sm mb-3">
                        <span>Users Information</span>
                    </div>
                    

                    
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-2">
            <div class="col-lg-12">
                <div class="bg-light p-4 rounded">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>View</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td><a href="{{ route('view', [$user->id]) }}" class="btn btn-outline-primary btn-sm">View</a></td>
                                    <td><a href="{{ route('delete', [$user->id]) }}" class="btn btn-outline-warning btn-sm">Delete</a></td>
                                </tr> 
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-lg-6 col-md-8 col-sm-12">
                <form action="{{ route('search') }}" method="GET" class="d-flex justify-content-between">
                    <input type="text" name="search" id="search" class="form-control" placeholder="Search">
                    <button type="submit" class="btn btn-primary btn-sm ml-2">Search</button>
                </form>
                <div class=" d-flex justify-content-around mt-3">
                    <div class="mb-3">
                        <a href="{{ route('adduser') }}" class="btn btn-outline-primary btn-sm">Add User</a>
                    </div>
                    <div class="mb-3">
                        <a href="{{ route('logout') }}" class="btn btn-outline-primary btn-sm">Logout</a>
                    </div>
                    <div class="mb-3">
                        <a href="{{ route('home') }}" class="btn btn-outline-info btn-sm">Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
