@extends('layouts.main')

@section('content')

<br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><strong>LISTE DES DEPENSES ENREGISTRES</strong> <i class="icon-notebook menu-icon"></i></h4>

                            <table class="table table-striped table-bordered zero-configuration">
                                <h2 class="text-center"></h2>

                                <thead>
                                <tr class="text-center">
                                    <th>N°</th>
                                    <th>Nom et prenom</th>
                                    <th>Somme dépensé</th>
                                    <th>Descrisption</th>
                                    <th>Actions</th>
                                </tr>

                                </thead>
                                @foreach ($depenses as $dep)
                                <tr class="text-center">
                                    <td>{{ $dep->id }}</td>
                                    <td>{{ $dep->nom_personnel }}</td>
                                    <td>{{ $dep->somme_depense }} FCFA</td>
                                    <td>{{ $dep->description }}</td>
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
