@extends('layout')
@section('title', 'Registration')
@section('content')
    <div class="container">
        <h1 class="text-center bg-primary">REGISTER</h1>
        <form action="{{route('registration.post')}}" method="post" class="ms-auto me-auto mt-3" style="width: 500px">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @elseif(Session::has('error'))
                <div class="alert alert-danger">
                    {{Session::get('error')}}
                </div>
            @endif
            @csrf
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control" placeholder="Enter your name"
                    name="name" value="{{old('name')}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" placeholder="Enter your email"
                    name="email" value="{{old('email')}}">
            </div>
            <div class="mb-3">
                <label  class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Enter your password"
                    name="password" value="">
            </div>
            <div class="mb-3">
                <label  class="form-label">Confirm Password</label>
                <input type="password" class="form-control" placeholder="Enter your password again"
                    name="password" value="">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
@endsection