@extends('layouts.main')

@section('content')

<br>


    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
            <h3 class="text-center"><strong>ENREGISTREMENT D'UN MODELE</strong></h3>

            @if (session('status'))

                <div class="alert alert-success">
                    {{ session('status') }}
                </div>

            @endif

            <form action="{{ route('store_modele') }}" method="POST" >
                @csrf
                <div>
                    <section>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Entrer le nom du modèle</label>
                                    <input type="text" name="libele_modele" class="form-control"  required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Choisire le type modèle</label>
                                    <select name="type_modele" class="form-control" required>
                                        <option>Veuillez choisir</option>
                                        <option value="Enfant">Enfant</option>
                                        <option value="Adulte">Adulte</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Prix de couture</label>
                                    <input type="number" name="prix_couture" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Durée de couture</label>
                                    <input type="text" name="duree_couture" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Photo du modèle</label>
                                    <input type="file" name="photo_model" class="form-control" >
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



