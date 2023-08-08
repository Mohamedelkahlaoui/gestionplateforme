@extends('adminlte::page')

@section('title')
    Show Projets
@endsection

@section('content_header')
    <h1>Show Projets</h1> 
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
                            Show Projets
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                                <label for="provs_id" class="form-label fw-bold">Province</label>
                                <input type="text" name="province"  disabled class="form-control rounded-0" placeholder="Province" value="{{$projet->provinces->name}}">
                                
                            </div>
                            <div class="form-group mb-3">
                                <label for="comm_id" class="form-label fw-bold">Commune</label>
                                <input type="text" name="commune" disabled class="form-control rounded-0" placeholder="commune" value="{{$projet->communes->name}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="anneeprog" class="form-label fw-bold">Année Programmation</label>
                                <input type="text" name="anneeprog" disabled class="form-control rounded-0" placeholder="Année Programmation" value="{{$projet->anneeprog}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="reference" class="form-label fw-bold">Reference</label>
                                <input type="text" name="reference" disabled class="form-control rounded-0" placeholder="Reference" value="{{$projet->reference}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="intitule" class="form-label fw-bold">Intitule Projet</label>
                                <input type="text" name="intitule" disabled class="form-control rounded-0" placeholder="Intitule Projet" value="{{$projet->intitule}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="couttotal" class="form-label fw-bold">Cout Total</label>
                                <input type="text" name="couttotal" disabled class="form-control rounded-0" placeholder="Cout Total" value="{{$projet->couttotal}}">
                            </div> 
                            <div class="form-group mb-3">
                                <label for="partIndh" class="form-label fw-bold">Part INDH</label>
                                <input type="text" name="partIndh" disabled class="form-control rounded-0" placeholder="Part INDH" value="{{$projet->partIndh}}">
                            </div> 
                            <div class="form-group mb-3">
                                <label for="part_id" class="form-label fw-bold">Partenaire</label>
                                <input type="text" name="partenaire" disabled class="form-control rounded-0" placeholder="Partenaire" value="{{$projet->partenaires->name}}">
                            </div> 
                            <div class="form-group mb-3">
                                <label for="delaireal" class="form-label fw-bold">Delai Realisation</label>
                                <input type="text" name="delaireal" disabled class="form-control rounded-0" placeholder="Cout Total" value="{{$projet->delaireal}}">
                            </div> 

                    </div>
                </div>
            </div>
        </div>    
    </div>
@stop

