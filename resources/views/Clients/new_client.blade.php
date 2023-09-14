@extends('layouts.main')

@section('content')
    <br>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
            <h3 class="text-center"><strong>ENREGISTREMENT D'UN CLIENT</strong></h3>

            @if (session('status'))

                <div class="alert alert-success">
                    {{ session('status') }}
                </div>

            @endif

            <form action="{{ route('store_client') }}" method="POST">
                @csrf

                <div>
                    <section>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Entrer le nom et prénom</label>
                                    <input type="text" name="nom_prenom" class="form-control" required >
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Choisire le sexe</label>
                                    <select name="sexe" class="form-control"required>
                                        <option>Veuillez choisir le sexe</option>
                                        <option value="Femme">Femme</option>
                                        <option value="Homme">Homme</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Entrer l'adresse</label>
                                    <input type="text" name="adresse" class="form-control"required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Entrer le numéro téléphone</label>
                                    <input type="number" name="telephone" class="form-control" required>
                                </div>
                            </div>


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




