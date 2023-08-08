@extends('adminlte::page')

@section('title')
    Add new Partenaires
@endsection

@section('content_header')
    <h1>Add new Partenaires</h1> 
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
                        Add new Partenaires
                    </div>
                    <div class="card-body">
                        <form action="{{route('partenaires.store')}}" method="POST" class="mt-3">
                            @csrf
                            <div>
                                <label for="name" class="form-label fw-bold">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Name" value="{{old('name')}}">
                            </div>
                            <div>
                                <label for="description" class="form-label fw-bold">Description</label>
                                <input type="text" name="description" class="form-control" placeholder="Description" value="{{old('description')}}">
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-10">
                                    <button type="submit" class="btn btn-primary">
                                       {{ __('Create') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>    
    </div>
@stop

