@extends('adminlte::page')

@section('title')
    Show Candidatures
@endsection

@section('content_header')
    <h1>Show Candidatures</h1> 
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
                            Show Candidatures
                    </div>
                    <div class="card-body">
                        <div>
                            <label for="cnie" class="form-label fw-bold">Cnie</label>
                            <input type="text" name="cnie" disabled class="form-control rounded-0" placeholder="Cnie" value="{{$candidature->cnie}}">
                        </div>
                        <div>
                            <label for="nom" class="form-label fw-bold">Nom</label>
                            <input type="text" name="nom" disabled class="form-control rounded-0" placeholder="Nom" value="{{$candidature->nom}}">
                        <div>
                            <label for="prenom" class="form-label fw-bold">Prenom</label>
                            <input type="text" name="prenom" disabled class="form-control rounded-0" placeholder="Prenom" value="{{$candidature->prenom}}">
                        </div>
                        <div>
                            <label for="genre" class="form-label fw-bold">Genre</label>
                            <input type="text" name="genre" disabled class="form-control rounded-0" placeholder="Genre" value="{{$candidature->genre}}">
                        </div>
                        <div>
                            <label for="dateNaissance" class="form-label fw-bold">Date Naissance</label>
                            <input type="text" name="dateNaissance" disabled class="form-control rounded-0" placeholder="Date Naissance" value="{{$candidature->dateNaissance}}">
                        </div>
                        <div>
                            <label for="profession" class="form-label fw-bold">Profession</label>
                            <input type="text" name="profession" disabled class="form-control rounded-0" placeholder="Profession" value="{{$candidature->profession}}">
                        </div>
                        <div>
                            <label for="tele" class="form-label fw-bold">Telephone</label>
                            <input type="text" name="tele" disabled class="form-control rounded-0" placeholder="Tele" value="{{$candidature->tele}}">
                        </div>
                        <div>
                            <label for="email" class="form-label fw-bold">Email</label>
                            <input type="text" name="email" disabled class="form-control rounded-0" placeholder="Email" value="{{$candidature->email}}">
                        </div>
                        <div>
                            <label for="niveau" class="form-label fw-bold">Niveau</label>
                            <input type="text" name="niveau" disabled class="form-control rounded-0" placeholder="Niveau" value="{{$candidature->niveau}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
@stop

