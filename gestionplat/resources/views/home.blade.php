@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row my-5">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{\App\Models\Budget::count()}}</h3>
                    <p>
                        <strong> Espace Programmation Budgétaire </strong>
                    </p>
                </div>
                <div class="icon">
                    <!-- <i class="i.ion.ion-bag"></i> -->
                    <iconify-icon icon="ion:bag"></iconify-icon>
                </div>
                <a href="{{url('budgets')}}" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{\App\Models\Projet::count()}}</h3>
                    <p>
                        <strong> Espace Projets Et Actions </strong>
                    </p>
                </div>
                <div class="icon">
                    <i class="i.ion.ion-bag"></i>
                    <!-- <iconify-icon icon="ion:bag"></iconify-icon> -->
                </div>
                <a href="{{url('projets')}}" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>  
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{\App\Models\Candidature::count()}}</h3>
                    <p>
                        <strong> Espace Aide Employabilité Des Jeunes </strong>
                    </p>
                </div>
                <div class="icon">
                    <i class="i.ion.ion-bag"></i>
                    <!-- <iconify-icon icon="ion:bag"></iconify-icon> -->
                </div>
                <a href="{{url('candidatures')}}" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{\App\Models\Jeune::count()}}</h3>
                    <p>
                        <strong> Espace Accueil Des Jeunes </strong>
                    
                    </p>
                </div>
                <div class="icon">
                    <i class="i.ion.ion-bag"></i>
                    <!-- <iconify-icon icon="ion:bag"></iconify-icon> -->
                </div>
                <a href="{{url('jeunes')}}" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{\App\Models\Province::count()}}</h3>
                    <p>
                        <strong> Espace Province </strong>
                    </p>
                </div>
                <div class="icon">
                    <!-- <i class="i.ion.ion-bag"></i> -->
                    <iconify-icon icon="ion:bag"></iconify-icon>
                </div>
                <a href="{{url('provinces')}}" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-6" >
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{\App\Models\Commune::count()}}</h3>
                    <p>
                        <strong> Espace Communes  </strong>
                    </p>
                </div>
                <div class="icon">
                    <i class="i.ion.ion-bag"></i>
                    <!-- <iconify-icon icon="ion:bag"></iconify-icon> -->
                </div>
                <a href="{{url('communes')}}" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>  
        <div class="col-lg-3 col-6" >
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{\App\Models\Partenaire::count()}}</h3>
                    <p>
                        <strong>Espace Partenaires</strong>
                    </p>
                </div>
                <div class="icon">
                    <i class="i.ion.ion-bag"></i>
                    <!-- <iconify-icon icon="ion:bag"></iconify-icon> -->
                </div>
                <a href="{{url('partenaires')}}" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script type="text/javascript">
	var _ydata=JSON.parse('{!! json_encode($exercices) !!}');
	var _xdata=JSON.parse('{!! json_encode($exerciceCount) !!}');
</script>
<script src="{{asset('public')}}/assets/demo/chart-area-demo.js"></script>
<script src="{{asset('public')}}/assets/demo/chart-bar-demo.js"></script>
{{$data}} -->
@stop

@section('css')

@stop

@section('js')

@stop
