@extends('adminlte::page')

@section('title')
    Add new Budgets
@endsection

@section('content_header')
    <h1>Add new Budgets</h1> 
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
                        Add new Budgets
                    </div>
                 <div class="card-body">
                        <form action="{{route('budgets.store')}}" method="POST" class="mt-3">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="exercice" class="form-label fw-bold">Exercice</label>
                                <input type="text" name="exercice" class="form-control" placeholder="Exercice" value="{{old('exercice')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="gestfplat" class="form-label fw-bold">Gestion Fonctionnement Plateforme</label>
                                <input type="text" name="gestfplat" class="form-control" placeholder="Gestion Fonctionnement Plateforme" value="{{old('gestfplat')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="aidempj" class="form-label fw-bold">Aide Employabilite Jeunes</label>
                                <input type="text" name="aidempj" class="form-control" placeholder="Aide Employabilite Jeunes" value="{{old('aidempj')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="entrjeu" class="form-label fw-bold">Entreprenariat Jeunes</label>
                                <input type="text" name="entrjeu" class="form-control" placeholder="Entreprenariat Jeunes" value="{{old('entrjeu')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="soutess" class="form-label fw-bold">Soutien Economie Social Solidaire</label>
                                <input type="text" name="soutess" class="form-control" placeholder="Soutien Economie Social Solidaire" value="{{old('soutess')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="foraccje" class="form-label fw-bold">Formation Accompagnement Jeunes</label>
                                <input type="text" name="foraccje" class="form-control" placeholder="Formation Accompagnement Jeunes" value="{{old('foraccje')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="result" class="form-label fw-bold">Résultat de la somme :</label>
                                <input type="text" id="result" class="form-label" readonly>
                                <button type="button" onclick="calculateSum()">
                                            {{ __('Calculer la somme') }}
                                </button>
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

@section('css')

@stop

@section('js')
<script>
        function calculateSum() {
            // Récupérer les valeurs des champs
            var fieldValue1 = parseInt(document.getElementsByName("gestfplat")[0].value) || 0;
            var fieldValue2 = parseInt(document.getElementsByName("aidempj")[0].value) || 0;
            var fieldValue3 = parseInt(document.getElementsByName("entrjeu")[0].value) || 0;
            var fieldValue4 = parseInt(document.getElementsByName("soutess")[0].value) || 0;
            var fieldValue5 = parseInt(document.getElementsByName("foraccje")[0].value) || 0;

            // Calculer la somme
            var sum = fieldValue1 + fieldValue2 + fieldValue3 + fieldValue4 + fieldValue5;

            // Afficher le résultat
            document.getElementById("result").value = sum;
        }
</script>