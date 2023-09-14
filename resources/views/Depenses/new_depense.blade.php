@extends('layouts.main')

@section('content')

<br>


    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
            <h3 class="text-center"><strong>ENREGISTREMENT D'UNE DEPENSE</strong></h3>


            @if (session('status'))

                <div class="alert alert-success">
                    {{ session('status') }}
                </div>

            @endif
            <form action="{{ route('store_depense') }}" method="POST">
                @csrf
                <div>
                    <section>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Choisire l'employé</label>
                                    <select name="nom_personnel" class="form-control" required>
                                        <option>Veuillez choisir</option>
                                        <option value="Kabore">Kabore</option>
                                        <option value="Tapsoba">Tapsoba</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Entrer la somme dépensé</label>
                                    <input type="text" name="somme_depense" class="form-control" required>
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Decription</label>
                                    <textarea class="form-control" name="description" rows="5" placeholder="Message ..."></textarea>
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




