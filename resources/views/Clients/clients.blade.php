@extends('layouts.main')

@section('content')

<br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><strong>LISTE DES CLIENTS ENREGISTRES</strong> <i class="fa fa-users"></i></h4>

                            <table class="table table-striped table-bordered zero-configuration">
                                <h2 class="text-center"></h2>

                                <thead>
                                 <tr class="text-center">
                                     <th>N°</th>
                                     <th>Nom et prenom</th>
                                     <th>Adresse</th>
                                     <th>Téléphone</th>
                                     <th>Sexe</th>
                                     <th>Actions</th>
                                 </tr>
                                </thead>
                                @foreach ($clients as $cli)
                                <tr class="text-center">
                                    <td>{{ $cli->id }}</td>
                                    <td>{{ $cli->nom_prenom }}</td>
                                    <td>{{ $cli->adresse }}</td>
                                    <td>{{ $cli->telephone }}</td>
                                    <td>{{ $cli->sexe }}</td>
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
