@extends('adminlte::page')

@section('title')
    Add new Projets
@endsection

@section('content_header')
    <h1>Add new Projets</h1> 
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
                        Add new Projets
                    </div>
                    <div class="card-body">
                        <form action="{{route('projets.store')}}" method="POST" class="mt-3">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="provs_id" class="form-label fw-bold">Province</label>
                                <select class="form-group" name="provs_id" id="provs_id">
                                    @foreach($provinces as $key => $province)
                                        <option value="{{$province->id}}">{{$province->name}}</option>

                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="comm_id" class="form-label fw-bold">Commune</label>
                                <select class="form-group" name="comm_id" id="comm_id">
                                    @foreach($communes as $key => $commune)
                                        <option value="{{$commune->id}}">{{$commune->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="anneeprog" class="form-label fw-bold">Année Programmation</label>
                                <input type="text" name="anneeprog" class="form-control" placeholder="Année Programmation" value="{{old('anneeprog')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="reference" class="form-label fw-bold">Reference</label>
                                <input type="text" name="reference" class="form-control" placeholder="Reference" value="{{old('reference')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="intitule" class="form-label fw-bold">Intitule Projet</label>
                                <input type="text" name="intitule" class="form-control" placeholder="Intitule Projet" value="{{old('intitule')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="couttotal" class="form-label fw-bold">Cout Total</label>
                                <input type="text" name="couttotal" class="form-control" placeholder="Cout Total" value="{{old('couttotal')}}">
                            </div> 
                            <div class="form-group mb-3">
                                <label for="partIndh" class="form-label fw-bold">Part Indh</label>
                                <input type="text" name="partIndh" class="form-control" placeholder="Part Indh" value="{{old('partIndh')}}">
                            </div> 
                            <div class="form-group mb-3">
                                <label for="pert_id" class="form-label fw-bold">Partenaire</label>
                                <select class="form-group" name="part_id" id="part_id">
                                    @foreach($partenaires as $key => $partenaire)
                                        <option value="{{$partenaire->id}}">{{$partenaire->name}}</option>
                                    @endforeach
                                </select>                                    
                            </div>
                            <div class="form-group mb-3">
                                <label for="delaireal" class="form-label fw-bold">Delai Realisation</label>
                                <input type="text" name="delaireal" class="form-control" placeholder="Cout Total" value="{{old('delaireal')}}">
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

