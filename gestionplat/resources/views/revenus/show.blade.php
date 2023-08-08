@extends('adminlte::page')

@section('title')
    Show Revenus
@endsection

@section('content_header')
    <h1>Show Revenus</h1> 
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
                            Show Revenus
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="montant" class="form-label fw-bold">Montant</label>
                            <input type="text" name="montant" disabled class="form-control rounded-0" placeholder="Montant" value="{{$revenu->montant}}">
                        </div>
                        <div>
                            <label for="description" class="form-label fw-bold">Description</label>
                            <input type="text" name="description" disabled class="form-control rounded-0" placeholder="Description" value="{{$revenu->description}}">
                        </div>
                        <div>
                            <label for="dateRev" class="form-label fw-bold">DateRev</label>
                            <input type="date" name="dateRev" disabled class="form-control rounded-0" placeholder="DateRev" value="{{$revenu->dateRev}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
@stop

