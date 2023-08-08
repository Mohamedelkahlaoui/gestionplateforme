@extends('adminlte::page')

@section('title')
    Show Demandes
@endsection

@section('content_header')
    <h1>Show Demandes</h1> 
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
                            Show Demandes
                    </div>
                    <div class="card-body">
                             <div>
                                <label for="type" class="form-label fw-bold">Type</label>
                                <input type="text" name="type" disabled class="form-control rounded-0" placeholder="Type" value="{{$demande->nom}}">
                            <div>
                                <label for="description" class="form-label fw-bold">Description</label>
                                <input type="text" name="description" disabled class="form-control rounded-0" placeholder="Description" value="{{$demande->description}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="statut" class="form-label fw-bold">Statut</label>
                                <input type="text" name="statut" disabled class="form-control rounded-0" placeholder="Statut" value="{{$demande->statut}}">
                            </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
@stop

