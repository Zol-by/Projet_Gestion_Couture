@extends('layouts.main')

@section('content')

<br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><strong>LISTE DES COMPTE UTILISATEURS</strong> <i class="fa fa-users"></i></h4>

                            <table class="table table-striped table-bordered zero-configuration">
                                <h2 class="text-center"></h2>

                                <thead>
                                 <tr class="text-center">
                                     <th>N°</th>
                                     <th>Nom et prenom</th>
                                     <th>Adresse</th>
                                     <th>Enregistré</th>
                                     <th>Actions</th>
                                 </tr>
                                </thead>

                                @foreach ($users as $use)

                                <tr class="text-center">
                                    <td>{{ $use->id }}</td>
                                    <td>{{ $use->name }}</td>
                                    <td>{{ $use->email  }} FCFA</td>
                                    <td>
                                        <a href="">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="">
                                            <i class="fa fa-trash "></i>
                                        </a>
                                    </td>
                                </tr>
                                
                                @endforeach

                             </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
