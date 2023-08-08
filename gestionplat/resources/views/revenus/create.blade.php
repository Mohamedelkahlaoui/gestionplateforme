@extends('adminlte::page')

@section('title')
    Add new Revenus
@endsection

@section('content_header')
    <h1>Add new Revenus</h1> 
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
                        Add new Revenus
                    </div>
                    <div class="card-body">
                        <form action="{{route('revenus.store')}}" method="POST" class="mt-3">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="montant" class="form-label fw-bold">Montant</label>
                                <input type="text" name="montant" class="form-control" placeholder="Montant" value="{{old('montant')}}">
                                <!-- <input type="number" name="amount" id="" placeholder="Enter the amount of budget"> -->
                            </div>
                            <div>
                                <label for="description" class="form-label fw-bold">Description</label>
                                <input type="text" name="description" class="form-control" placeholder="Description" value="{{old('description')}}">
                            </div>
                            <div>
                                <label for="dateRev" class="form-label fw-bold">DateRev</label>
                                <input type="date" name="dateRev" class="form-control" placeholder="DateRev" value="{{old('dateRev')}}">
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

