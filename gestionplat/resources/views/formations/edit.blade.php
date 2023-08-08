@extends('adminlte::page')

@section('title')
    Update Formations
@endsection

@section('content_header')
    <h1>Update Formations</h1> 
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
                             Update Formations
                    </div>
                    <div class="card-body">
                        <form method="POST" class="mt-3" action="{{ route('formations.update',[$formation->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label for="titre" class="form-label fw-bold">Titre</label>
                                <input type="text" name="titre" class="form-control" placeholder="Titre" value="{{old('titre',$formation->titre)}}">
                            </div>
                            <div>
                                <label for="description" class="form-label fw-bold">Description</label>
                                <input type="text" name="description" class="form-control" placeholder="Description" value="{{old('description',$formation->description)}}">
                            </div>
                            <div>
                                <label for="type" class="form-label fw-bold">Type</label>
                                <input type="text" name="type" class="form-control" placeholder="Type" value="{{old('type',$formation->type)}}">
                            </div>
                            <div>
                                <label for="dateDebut" class="form-label fw-bold">Date Debut</label>
                                <input type="date" name="dateDebut" class="form-control" placeholder="Date Debut" value="{{old('dateDebut',$formation->dateDebut)}}">
                            </div>
                            <div>
                                <label for="dateFin" class="form-label fw-bold">Date Fin</label>
                                <input type="date" name="dateFin" class="form-control" placeholder="Date Fin" value="{{old('dateFin',$formation->dateFin)}}">
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
