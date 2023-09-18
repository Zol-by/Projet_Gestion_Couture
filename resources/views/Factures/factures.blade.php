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
                                     <th>N°</th>
                                     <th>Nom de client</th>
                                     <th>Commande n°</th>
                                 </tr>
                                </thead>
                                @foreach ($factures as $fact)

                                <tr class="text-center">
                                    <td>{{ $fact->id }}</td>
                                    <td>{{ $fact->Client->nom_prenom  }}</td>
                                    <td>{{ $fact->id_commande }}</td>
                                    <td>
                                        <a href="">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="">
                                            <i class="fa fa-trash "></i>
                                        </a>
                                        <a href="">
                                                <i class="fa fa-print "></i>
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
