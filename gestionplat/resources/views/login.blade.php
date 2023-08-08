@extends('layout')
@section('title', "Login")
@section('content')
    <div class="container">
        <h1 class="text-center bg-primary">LOGIN</h1>
        <form action="{{route('login.post')}}" method="post" class="ms-auto me-auto mt-3" style="width: 500px">
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
                <label class="form-label ">Email address</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" value="{{old('email')}}">
            </div>
            <div class="mb-3">
                <label  class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Enter your password"
                    name="password" value="">
            </div>
            <!-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
            </div> -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
@endsection