@extends('layouts.main')

@section('content')

@include('require.statistique')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><strong>LISTE DES UTILISATEURS ENREGISTRES</strong> <i class="icon-grid menu-icon"></i></h4>

                            <table class="table table-striped table-bordered zero-configuration">
                                <h2 class="text-center"></h2>

                                <thead>
                                 <tr>
                                     <th>Nom et prenom</th>
                                     <th>Sexe</th>
                                     <th>Adresse</th>
                                     <th>Téléphone</th>
                                     <th>Enregistré</th>
                                     <th>Actions</th>
                                 </tr>
                                </thead>
                                <tr>
                                    <td>Vide</td>
                                    <td>Vide</td>
                                    <td>Vide</td>
                                    <td>Vide</td>
                                    <td>Vide</td>
                                    <td>
                                        <a href="">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="">
                                            <i class="fa fa-trash "></i>
                                        </a>
                                    </td>
                                </tr>
                                    <tr>
                                        <td>Vide</td>
                                        <td>Vide</td>
                                        <td>Vide</td>
                                        <td>Vide</td>
                                        <td>Vide</td>
                                        <td>
                                        <a href="">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="">
                                            <i class="fa fa-trash "></i>
                                        </a>
                                    </td>
                                    </tr>
                                <tr>
                                    <td>Vide</td>
                                    <td>Vide</td>
                                    <td>Vide</td>
                                    <td>Vide</td>
                                    <td>Vide</td>
                                    <td>
                                        <a href="">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="">
                                            <i class="fa fa-trash "></i>
                                        </a>
                                    </td>
                                </tr>
                             </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
