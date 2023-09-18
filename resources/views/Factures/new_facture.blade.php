@extends('layouts.main')

@section('content')

<br>
@if (session('status'))

                <div class="alert alert-success">
                    {{ session('status') }}
                </div>

            @endif

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
            <h3 class="text-center"><strong>ENREGISTREMENT D'UNE FACTURE</strong></h3>
            <form action="{{ route('stort_facture') }}" method="POST">
                @csrf
                <div>
                    <section>
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Choisire le client</label>
                                    <select name="id_client" class="form-control" required>
                                        <option value="">Choisissez le client</option>
                                        @foreach ($clients as $cli)
                                            <option value="{{ $cli->id }}">{{ $cli->nom_prenom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Choisire le n° de la commande</label>
                                    <select name="id_commande" class="form-control" required>
                                        <option>Choissisez la commande</option>

                                        @foreach ($commande as $comd)
                                            <option value="{{ $comd->id }}">{{ $comd->mes_tete }}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>

                            {{-- <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Entrer la somme</label>
                                    <input type="number" name="somme" class="form-control"required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Entrer l'avance payé</label>
                                    <input type="number" name="adresse" class="form-control"required>
                                </div>
                            </div> --}}

                        </div>
                    </section>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection



