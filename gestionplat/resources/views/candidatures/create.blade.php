@extends('adminlte::page')

@section('title')
    Add new Candidatures
@endsection

@section('content_header')
    <h1>Add new Candidatures</h1> 
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
                        Add new Candidatures
                    </div>
                    <div class="card-body">
                        <form action="{{route('candidatures.store')}}" method="POST" class="mt-3">
                            @csrf
                            <div>
                                <label for="cnie" class="form-label fw-bold">Cnie</label>
                                <input type="text" name="cnie" class="form-control" placeholder="Cnie" value="{{old('cnie')}}">
                            </div>
                            <div>
                                <label for="nom" class="form-label fw-bold">Nom</label>
                                <input type="text" name="nom" class="form-control" placeholder="Nom" value="{{old('nom')}}">
                            </div>
                            <div>
                                <label for="prenom" class="form-label fw-bold">Prenom</label>
                                <input type="text" name="prenom" class="form-control" placeholder="Prenom" value="{{old('prenom')}}">
                            </div>
                            <div>
                                <label for="genre" class="form-label fw-bold">Genre</label>
                                <input type="text" name="genre" class="form-control" placeholder="Genre" value="{{old('genre')}}">
                            </div>
                            <div>
                                <label for="dateNaissance" class="form-label fw-bold">Date Naissance</label>
                                <input type="date" name="dateNaissance" class="form-control" placeholder="Date Naissance" value="{{old('dateNaissance')}}">
                            </div>
                            <div>
                                <label for="profession" class="form-label fw-bold">Profession</label>
                                <input type="text" name="profession" class="form-control" placeholder="Profession" value="{{old('profession')}}">
                            </div>
                            <div>
                                <label for="tele" class="form-label fw-bold">Telephone</label>
                                <input type="text" name="tele" class="form-control" placeholder="Tele" value="{{old('tele')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email" class="form-label fw-bold">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Email" value="{{old('email')}}">
                            </div>
                            <div>
                                <label for="niveau" class="form-label fw-bold">Niveau</label>
                                <input type="text" name="niveau" class="form-control" placeholder="Niveau" value="{{old('niveau')}}">
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

