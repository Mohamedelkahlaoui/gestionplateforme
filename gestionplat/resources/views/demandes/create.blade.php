@extends('adminlte::page')

@section('title')
    Add new Demandes
@endsection

@section('content_header')
    <h1>Add new Demandes</h1> 
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
                        Add new Demandes
                    </div>
                    <div class="card-body">
                        <form action="{{route('demandes.store')}}" method="POST" class="mt-3">
                            @csrf
                            <div>
                                <label for="type" class="form-label fw-bold">Type</label>
                                <input type="text" name="type" class="form-control" placeholder="Type" value="{{old('type')}}">
                            </div>
                            <div>
                                <label for="description" class="form-label fw-bold">Description</label>
                                <input type="text" name="description" class="form-control" placeholder="Description" value="{{old('description')}}">
                            </div>
                            <div>
                                <label for="statut" class="form-label fw-bold">Statut</label>
                                <input type="text" name="statut" class="form-control" placeholder="statut" value="{{old('statut')}}">
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

