@extends('adminlte::page')

@section('title')
    Show Provinces
@endsection

@section('content_header')
    <h1>Show Provinces</h1> 
@stop

@section('content')
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card my-5">
                <div class="row my-5">
                    <div class="col-md-6 mx-auto">
                    @include('include.alert')
                    </div>
                </div>
                <div class="card header">
                    <div class="text-center font-weight-bold text-uppercase">
                            Show Provinces
                    </div>
                    <div class="card-body">
                             <div>
                                <label for="name" class="form-label fw-bold">Name</label>
                                <input type="text" name="name" disabled class="form-control rounded-0" placeholder="Name" value="{{$province->name}}">
                            <div>
                                <label for="adresse" class="form-label fw-bold">Adresse</label>
                                <input type="text" name="adresse" disabled class="form-control rounded-0" placeholder="Adresse" value="{{$province->adresse}}">
                            </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
@stop

