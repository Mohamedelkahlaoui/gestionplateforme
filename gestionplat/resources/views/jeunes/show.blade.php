@extends('adminlte::page')

@section('title')
    Show Jeunes
@endsection

@section('content_header')
    <h1>Show Jeunes</h1> 
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
                            Show Jeunes
                    </div>
                    <div class="card-body">
                             <div>
                                <label for="nom" class="form-label fw-bold">Nom</label>
                                <input type="text" name="nom" disabled class="form-control rounded-0" placeholder="Nom" value="{{$jeune->nom}}">
                            <div>
                                <label for="prenom" class="form-label fw-bold">Prenom</label>
                                <input type="text" name="prenom" disabled class="form-control rounded-0" placeholder="Prenom" value="{{$jeune->prenom}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email" class="form-label fw-bold">Email</label>
                                <input type="text" name="email" disabled class="form-control rounded-0" placeholder="Email" value="{{$jeune->email}}">
                            </div>
                            <div>
                                <label for="datenaissance" class="form-label fw-bold">DateNaissance</label>
                                <input type="date" name="datenaissance" disabled class="form-control rounded-0" placeholder="DateNaissance" value="{{$jeune->datenaissance}}">
                            </div>
                            <div>
                                <label for="adresse" class="form-label fw-bold">Adresse</label>
                                <input type="text" name="adresse" disabled class="form-control rounded-0" placeholder="Adresse" value="{{$jeune->adresse}}">
                            </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
@stop

