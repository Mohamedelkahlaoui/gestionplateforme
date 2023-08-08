@extends('adminlte::page')

@section('title')
    Show Formations
@endsection

@section('content_header')
    <h1>Show Formations</h1> 
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
                            Show Formations
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="titre" class="form-label fw-bold">Titre</label>
                            <input type="text" name="titre" disabled class="form-control rounded-0" placeholder="Titre" value="{{$formation->titre}}">
                        </div>
                        <div>
                            <label for="description" class="form-label fw-bold">Description</label>
                            <input type="text" name="description" disabled class="form-control rounded-0" placeholder="Description" value="{{$formation->description}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="type" class="form-label fw-bold">Type</label>
                            <input type="text" name="type" disabled class="form-control rounded-0" placeholder="Type" value="{{$formation->type}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="dateDebut" class="form-label fw-bold">Date Debut</label>
                            <input type="date" name="dateDebut" disabled class="form-control rounded-0" placeholder="dateDebut" value="{{$formation->dateDebut}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="dateDebut" class="form-label fw-bold">Date Fin</label>
                            <input type="date" name="montant" disabled class="form-control rounded-0" placeholder="Montant" value="{{$formation->dateFin}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
@stop

