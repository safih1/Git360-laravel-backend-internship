@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-6 col-md-8 col-sm-12">
                <div class="wrapper bg-light p-4 rounded">
                    <div class="text-center text-uppercase text-white bg-primary rounded-sm mb-3">
                        <span>WELCOME! <strong> {{$getRecord->name}}</strong></span>
                    </div>
                    <div>
                        
                        <p><strong>ID :</strong> {{$getRecord->id}}</p>
                        <p><strong>Email :</strong> {{$getRecord->email}}</p>
                        <p><strong>Created At :</strong> {{$getRecord->created_at}}</p>
                        <p><strong>Created At :</strong> {{$getRecord->updated_at}}</p>



                    </div>

                    <div class="mt-3 d-flex justify-content-center">
                        <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                    </div>
                    <div class="mt-2 d-flex justify-content-center">
                        <a href="{{ route('home') }}" class="btn btn-info">Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
