@extends('layouts.main')

@section('content')

<br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><strong>LISTE DES MESURES ENREGISTRES</strong> <i class="icon-note menu-icon"></i></h4>

                            <table class="table table-striped table-bordered zero-configuration">
                                <h2 class="text-center"></h2>

                                <thead>
                                 <tr>
                                     <th>N° enregistrement</th>
                                     <th>Client n°</th>
                                     <th>Modèle n°</th>
                                     <th>Actions</th>
                                 </tr>
                                </thead>
                                @foreach ($commande as $comd)

                                <tr class="text-center">
                                    <td>{{ $comd->id }}</td>
                                    <td>{{ $comd->id_client }}</td>
                                    <td>{{ $comd->id_modele  }}</td>
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
