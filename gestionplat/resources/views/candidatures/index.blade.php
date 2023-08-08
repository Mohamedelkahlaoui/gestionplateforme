@extends('adminlte::page')
@section('plugins.Datatables', true)
@section('title')
    List of Candidatures
@endsection

@section('content_header')
    <h1>List of Candidatures</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card my-3">
                <div class="card header">
                    <div class="text-center font-weight-bold text-uppercase">
                        Candidatures
                    </div>
                </div>
                <div class="card-body">
                    <table id="myTable" class="table table-bordered table-stripped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Cnie</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Genre</th>
                                <th>Date Naissance</th>
                                <th>Profession</th>
                                <th>Telephone</th>
                                <th>Email</th>
                                <th>Niveau</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($candidatures as $key => $candidature)
                                <tr>
                                    <td>{{$key+=1}}</td>
                                    <td>{{$candidature->cnie}}</td>
                                    <td>{{$candidature->nom}}</td>
                                    <td>{{$candidature->prenom}}</td>
                                    <td>{{$candidature->genre}}</td>
                                    <td>{{$candidature->dateNaissance}}</td>
                                    <td>{{$candidature->profession}}</td>
                                    <td>{{$candidature->tele}}</td>
                                    <td>{{$candidature->email}}</td>
                                    <td>{{$candidature->niveau}}</td>
                                    <td class="d-flex justify-content-center align-items-center">
                                        <a href="{{route('candidatures.show', $candidature->id)}}" 
                                        class="btn btn-sm btn-primary">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{route('candidatures.edit', $candidature->id)}}" 
                                        class="btn btn-sm btn-waring mx-2">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form id="{{$candidature->id}}" action="{{route('candidatures.destroy', $candidature->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            
                                        </form>
                                        <button onclick="deleteAd({{$candidature->id}})" type="submit" class="btn btn-sm btn-danger">
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
