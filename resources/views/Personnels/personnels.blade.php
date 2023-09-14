@extends('layouts.main')

@section('content')

<br>


    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><strong>LISTE DES EMPLOYES ENREGISTRES</strong> <i class="fa fa-user"></i></h4>

                            <table class="table table-striped table-bordered zero-configuration">
                                <h2 class="text-center"></h2>

                                <thead>
                                 <tr class="text-center">
                                     <th>N°</th>
                                     <th>Nom et prenom</th>
                                     <th>Sexe</th>
                                     <th>Adresse</th>
                                     <th>Téléphone</th>
                                     <th>Fonction</th>
                                     <th>Salaire</th>
                                     <th>Actions</th>
                                 </tr>
                                </thead>

                                @foreach ($personnel as $perso)
                                <tr class="text-center">
                                    <td>{{ $perso->id }}</td>
                                    <td>{{ $perso->nom_prenom }}</td>
                                    <td>{{ $perso->sexe }}</td>
                                    <td>{{ $perso->adresse }}</td>
                                    <td>{{ $perso->telephone }}</td>
                                    <td>{{ $perso->fonction }}</td>
                                    <td>{{ $perso->salaire }} FCFA</td>

                                    <td>
                                        <a href="">
                                            <i class="fa fa-eye" title="détaille"></i>
                                        </a>
                                        <a href="">
                                            <i class="fa fa-pencil" title="modifier"></i>
                                        </a>
                                        <a href="">
                                            <i class="fa fa-trash" title="supprimer"></i>
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
