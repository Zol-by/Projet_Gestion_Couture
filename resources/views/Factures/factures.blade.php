@extends('layouts.main')

@section('content')

<br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><strong>LISTE DES FACTURES ENREGISTRES</strong> <i class="fa fa-money"></i></h4>

                            <table class="table table-striped table-bordered zero-configuration">
                                <h2 class="text-center"></h2>

                                <thead>
                                 <tr class="text-center">
                                     <th>Nom de client</th>
                                     <th>Sexe</th>
                                     <th>Adresse</th>
                                     <th>Téléphone</th>
                                     <th>Enregistré</th>
                                     <th>Actions</th>
                                 </tr>
                                </thead>
                                <tr class="text-center">
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
