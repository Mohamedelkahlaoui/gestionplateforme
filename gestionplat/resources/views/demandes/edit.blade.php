@extends('adminlte::page')

@section('title')
    Update Demandes
@endsection

@section('content_header')
    <h1>Update Demandes</h1> 
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
                             Update Demandes
                    </div>
                    <div class="card-body">
                        <form method="POST" class="mt-3" action="{{ route('demandes.update',[$demande->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div>
                                <label for="type" class="form-label fw-bold">Type</label>
                                <input type="text" name="type" class="form-control" placeholder="Type" value="{{old('type', $demande->type)}}">
                            </div>
                            <div>
                                <label for="description" class="form-label fw-bold">Description</label>
                                <input type="text" name="description" class="form-control" placeholder="Description" value="{{old('description', $demande->description)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="statut" class="form-label fw-bold">Statut</label>
                                <input type="text" name="statut" class="form-control" placeholder="Statut" value="{{old('statut', $demande->statut)}}">
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

