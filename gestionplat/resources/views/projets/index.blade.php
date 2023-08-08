@extends('adminlte::page')
@section('plugins.Datatables', true)
@section('title')
    List of Projets
@endsection

@section('content_header')
    <h1>List of Projets</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card my-3">
                <div class="card header">
                    <div class="text-center font-weight-bold text-uppercase">
                        Projets
                    </div>
                </div>
                <div class="card-body">
                    <table id="myTable" class="table table-bordered table-stripped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Province</th>
                                <th>Commune</th>
                                <th>Année Programmation</th>
                                <th>Reference</th>
                                <th>Intitule Projet</th>
                                <th>Cout Total</th>
                                <th>Part INDH</th>
                                <th>Partenaire</th>
                                <th>Delai Realisation</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($projets as $key => $projet)                       
                                <tr>
                                    <td>{{$key+=1}}</td>
                                    <td>{{$projet->provinces->name}}</td>
                                    <td>{{$projet->communes->name}}</td>
                                    <td>{{$projet->anneeprog}}</td>
                                    <td>{{$projet->reference}}</td>
                                    <td>{{$projet->intitule}}</td>
                                    <td>{{$projet->couttotal}}</td>
                                    <td>{{$projet->partIndh}}</td>
                                    <td>{{$projet->partenaires->name}}</td>
                                    <td>{{$projet->delaireal}}</td>
                                    <td class="d-flex justify-content-center align-items-center">
                                        <a href="{{route('projets.show', $projet->id)}}" 
                                        class="btn btn-sm btn-primary">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{route('projets.edit', $projet->id)}}" 
                                        class="btn btn-sm btn-waring mx-2">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form id="{{$projet->id}}" action="{{route('projets.destroy', $projet->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            
                                        </form>
                                        <button onclick="deleteAd({{$projet->id}})" type="submit" class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
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
        $(document).ready( function () {
            $('#myTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'excel', 'csv', 'pdf', 'print', 'colvis'
                ]
            });
        });
    </script>
    @if(session()->has("success"))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: "{{session()->get('success')}}",
                showConfirmButton: false,
                timer: 3500
            });
        </script>
    @endif
    <script>
        function deleteAd(id){
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger mr-2'
                },
                buttonsStyling: false
                })

                swalWithBootstrapButtons.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true
                }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(id).submit();
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your ad is safe :)',
                        'error'
                    )
                }
                })
        }
    </script>
@stop
