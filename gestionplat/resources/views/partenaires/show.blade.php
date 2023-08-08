@extends('adminlte::page')

@section('title')
    Show Partenaires
@endsection

@section('content_header')
    <h1>Show Partenaires</h1> 
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
                            Show Partenaires
                    </div>
                    <div class="card-body">
                        <div>
                            <label for="name" class="form-label fw-bold">Name</label>
                            <input type="text" name="name" disabled class="form-control rounded-0" placeholder="Name" value="{{$partenaire->name}}">
                        <div>
                            <label for="description" class="form-label fw-bold">Description</label>
                            <input type="text" name="description" disabled class="form-control rounded-0" placeholder="Description" value="{{$partenaire->description}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
@stop

