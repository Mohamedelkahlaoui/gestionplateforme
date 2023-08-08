@extends('adminlte::page')

@section('title')
    Update Budgets
@endsection

@section('content_header')
    <h1>Update Budgets</h1> 
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
                             Update Budgets
                    </div>
                    <div class="card-body">
                        <form method="POST" class="mt-3" action="{{ route('budgets.update',[$budget->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label for="exercice" class="form-label fw-bold">Exercice</label>
                                <input type="text" name="exercice" class="form-control" placeholder="Exercice" value="{{old('exercice', $budget->exercice)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="gestfplat" class="form-label fw-bold">Gestion Fonctionnement Plateforme</label>
                                <input type="text" name="gestfplat" class="form-control" placeholder="Gestion Fonctionnement Plateforme" value="{{old('gestfplat', $budget->gestfplat)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="aidempj" class="form-label fw-bold">Aide Employabilite Jeunes</label>
                                <input type="text" name="aidempj" class="form-control" placeholder="Aide Employabilite Jeunes" value="{{old('aidempj', $budget->aidempj)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="entrjeu" class="form-label fw-bold">Entreprenariat Jeunes</label>
                                <input type="text" name="entrjeu" class="form-control" placeholder="Entreprenariat Jeunes" value="{{old('entrjeu', $budget->entrjeu)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="soutess" class="form-label fw-bold">Soutien Economie Social Solidaire</label>
                                <input type="text" name="soutess" class="form-control" placeholder="Soutien Economie Social Solidaire" value="{{old('soutess', $budget->soutess)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="foraccje" class="form-label fw-bold">Formation Accompagnement Jeunes</label>
                                <input type="text" name="foraccje" class="form-control" placeholder="Formation Accompagnement Jeunes" value="{{old('foraccje', $budget->foraccje)}}">
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

