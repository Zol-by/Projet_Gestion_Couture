@extends('layouts.main')

@section('content')

<br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><strong>LISTE DES MODELES ENREGISTRES</strong> <i class="fa fa-cubes"></i></h4>

                            <table class="table table-striped table-bordered zero-configuration">
                                <h2 class="text-center"></h2>

                                <thead>
                                 <tr class="text-center">
                                     <th>N°</th>
                                     <th>Nom du modèle</th>
                                     <th>Type du modèle</th>
                                     <th>Prix couture</th>
                                     <th>Durée couture</th>
                                     {{-- <th>Photo</th> --}}
                                     <th>Actions</th>
                                 </tr>
                                </thead>
                                @foreach ($modele as $mod)
                                <tr class="text-center">
                                    <td>{{ $mod->id }}</td>
                                    <td>{{ $mod->libele_modele }}</td>
                                    <td>{{ $mod->type_modele }}</td>
                                    <td>{{ $mod->prix_couture }} FCFA</td>
                                    <td>{{ $mod->duree_couture }}</td>
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

                                    {{-- <td><img src="images/user/1.png" height="40" width="40" alt=""></td> --}}


                             </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
