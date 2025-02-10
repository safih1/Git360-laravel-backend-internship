@extends('layouts.app')
@section('content')
    <div>
        <p> <b>Name : </b> {{$getRecord->name}}</p>
        <p> <b>Email : </b> {{$getRecord->email}}</p>
    </div>
    <div>
        <a href="{{ route('logout') }}">Logout</a>
    </div>
    <div>
        <a href="{{ route('home') }}">Home</a>
    </div>
@endsection