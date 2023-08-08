@extends('adminlte::page')

@section('title')
    Update Partenaires
@endsection

@section('content_header')
    <h1>Update Partenaires</h1> 
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
                             Update Partenaires
                    </div>
                    <div class="card-body">
                        <form method="POST" class="mt-3" action="{{ route('partenaires.update',[$partenaire->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div>
                                <label for="name" class="form-label fw-bold">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Name" value="{{old('name', $partenaire->name)}}">
                            </div>
                            <div>
                                <label for="description" class="form-label fw-bold">Description</label>
                                <input type="text" name="description" class="form-control" placeholder="description" value="{{old('description', $partenaire->description)}}">
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-10">
                                    <button type="submit" class="btn btn-primary">
                                       {{ __('Update') }}
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

