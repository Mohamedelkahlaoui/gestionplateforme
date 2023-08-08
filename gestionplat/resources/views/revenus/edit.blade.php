@extends('adminlte::page')

@section('title')
    Update Revenus
@endsection

@section('content_header')
    <h1>Update Revenus</h1> 
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
                             Update Revenus
                    </div>
                    <div class="card-body">
                        <form method="POST" class="mt-3" action="{{ route('revenus.update',[$revenu->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label for="montant" class="form-label fw-bold">Montant</label>
                                <input type="text" name="montant" class="form-control" placeholder="Montant" value="{{old('montant',$revenu->montant)}}">
                            </div>
                            <div>
                                <label for="description" class="form-label fw-bold">Description</label>
                                <input type="text" name="description" class="form-control" placeholder="Description" value="{{old('description',$revenu->description)}}">
                            </div>
                            <div>
                                <label for="dateRev" class="form-label fw-bold">DateRev</label>
                                <input type="date" name="dateRev" class="form-control" placeholder="DateRev" value="{{old('dateRev', $revenu->dateRev)}}">
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

