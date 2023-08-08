@extends('adminlte::page')

@section('title')
    Update Jeunes
@endsection

@section('content_header')
    <h1>Update Jeunes</h1> 
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
                             Update Jeunes
                    </div>
                    <div class="card-body">
                        <form method="POST" class="mt-3" action="{{ route('jeunes.update',[$jeune->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div>
                                <label for="nom" class="form-label fw-bold">Nom</label>
                                <input type="text" name="nom" class="form-control" placeholder="Nom" value="{{old('nom', $jeune->nom)}}">
                            </div>
                            <div>
                                <label for="prenom" class="form-label fw-bold">Prenom</label>
                                <input type="text" name="prenom" class="form-control" placeholder="Prenom" value="{{old('prenom', $jeune->prenom)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email" class="form-label fw-bold">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Email" value="{{old('email', $jeune->email)}}">
                            </div>
                            <div>
                                <label for="datenaissance" class="form-label fw-bold">DateNaissance</label>
                                <input type="date" name="datenaissance" class="form-control" placeholder="DateNaissance" value="{{old('datenaissance', $jeune->datenaissance)}}">
                            </div>
                            <div>
                                <label for="adresse" class="form-label fw-bold">Adresse</label>
                                <input type="text" name="adresse" class="form-control" placeholder="Adresse" value="{{old('adresse', $jeune->adresse)}}">
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

