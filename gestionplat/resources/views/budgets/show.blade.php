@extends('adminlte::page')
@section('title')
    Show Budgets
@endsection

@section('content_header')
    <h1>Show Budgets</h1> 
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
                            Show Budgets
                    </div>
                </div>
                <div class="card-body">
                    <table id="myTable" class="table table-bordered table-stripped">
                        <div class="form-group mb-3">
                                <label for="exercice" class="form-label fw-bold">Exercice</label>
                                <input type="text" name="exercice" disabled class="form-control rounded-0" placeholder="Exercice" value="{{old('exercice', $budget->exercice)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="gestfplat" class="form-label fw-bold">Gestion Fonctionnement Plateforme</label>
                                <input type="text" name="gestfplat" disabled class="form-control rounded-0" placeholder="Gestion Fonctionnement Plateforme" value="{{$budget->gestfplat}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="aidempj" class="form-label fw-bold">Aide Employabilite Jeunes</label>
                                <input type="text" name="aidempj" disabled class="form-control rounded-0" placeholder="Aide Employabilite Jeunes" value="{{$budget->aidempj}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="entrjeu" class="form-label fw-bold">Entreprenariat Jeunes</label>
                                <input type="text" name="entrjeu" disabled class="form-control rounded-0" placeholder="Entreprenariat Jeunes" value="{{$budget->entrjeu}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="soutess" class="form-label fw-bold">Soutien Economie Social Solidaire</label>
                                <input type="text" name="soutess" disabled class="form-control rounded-0" placeholder="Soutien Economie Social Solidaire" value="{{$budget->soutess}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="foraccje" class="form-label fw-bold">Formation Accompagnement Jeunes</label>
                                <input type="text" name="foraccje" disabled class="form-control rounded-0" placeholder="Formation Accompagnement Jeunes" value="{{$budget->foraccje}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="result" class="form-label fw-bold">Résultat de la somme :</label>
                                <input type="text" id="result" class="form-label" readonly>
                                <button type="button" onclick="calculateSum()">
                                            {{ __('Calculer la somme') }}
                                </button>
                            </div>
                        </div>
                    </table>
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
<script>
        $(document).ready( function () {
            $('#myTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'excel', 'csv', 'pdf', 'print', 'colvis'
                ]
            });
        });
</script>
@stop

