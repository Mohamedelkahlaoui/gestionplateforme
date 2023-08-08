@extends('adminlte::page')

@section('title')
    Update Projets
@endsection

@section('content_header')
    <h1>Update Projets</h1> 
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
                             Update Projets
                    </div>
                    <div class="card-body">
                        <form method="POST" class="mt-3" action="{{ route('projets.update',$projet->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label for="province" class="form-label fw-bold">Province</label>
                                <select class="form-group" name="provs_id" id="provs_id">
                                    @foreach($province as $key => $province)
                                        <option value="{{$province->id}}">{{$province->name}}</option>
                                    @endforeach
                                </select>
                                <!-- <input type="text" name="province" class="form-control" placeholder="Province" value="{{old('province', $projet->province)}}"> -->
                            </div>
                            <div class="form-group mb-3">
                                <label for="commune" class="form-label fw-bold">Commune</label>
                                <select class="form-group" name="comm_id" id="comm_id">
                                    @foreach($commune as $key => $commune)
                                        <option value="{{$commune->id}}">{{$commune->name}}</option>
                                    @endforeach
                                </select>
                                <!-- <input type="text" name="commune" class="form-control" placeholder="commune" value="{{old('commune', $projet->commune)}}"> -->
                            </div>
                            <div class="form-group mb-3">
                                <label for="anneeprog" class="form-label fw-bold">Année Programmation</label>
                                <input type="text" name="anneeprog" class="form-control" placeholder="Année Programmation" value="{{old('anneeprog', $projet->anneeprog)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="reference" class="form-label fw-bold">Reference</label>
                                <input type="text" name="reference" class="form-control" placeholder="Reference" value="{{old('reference', $projet->reference)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="intitule" class="form-label fw-bold">Intitule Projet</label>
                                <input type="text" name="intitule" class="form-control" placeholder="Intitule Projet" value="{{old('intitule', $projet->intitule)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="couttotal" class="form-label fw-bold">Cout Total</label>
                                <input type="text" name="couttotal" class="form-control" placeholder="Cout Total" value="{{old('couttotal', $projet->couttotal)}}">
                            </div> 
                            <div class="form-group mb-3">
                                <label for="partIndh" class="form-label fw-bold">Part Indh</label>
                                <input type="text" name="partIndh" class="form-control" placeholder="Part Indh" value="{{old('partIndh', $projet->partIndh)}}">
                            </div> 
                            <div class="form-group mb-3">
                                <label for="partenaire" class="form-label fw-bold">Part INDH</label>
                                <select class="form-group" name="part_id" id="part_id">
                                    @foreach($partenaire as $key => $partenaire)
                                        <option value="{{$partenaire->id}}">{{$partenaire->name}}</option>
                                    @endforeach
                                </select>
                                <!-- <input type="text" name="partIndh" class="form-control" placeholder="Part INDH" value="{{old('partIndh', $projet->partIndh)}}"> -->
                            </div> 
                            <div class="form-group mb-3">
                                <label for="delaireal" class="form-label fw-bold">Delai Realisation</label>
                                <input type="text" name="delaireal" class="form-control" placeholder="Cout Total" value="{{old('delaireal', $projet->delaireal)}}">
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
@endsection

