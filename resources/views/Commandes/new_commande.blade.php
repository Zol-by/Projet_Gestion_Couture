@extends('layouts.main')

@section('content')
<br>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="active-member">
                        <h3 class="text-center"><strong>ENREGISTREMENT D'UNE NOUVELLE COMMANDE</strong></h3>

                        <div class="form-validation">
                        <form action="{{ route('store_commande') }}" method="POST">
                                <div>
                                    <section>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Choisir le client</label>
                                                    <select class="form-control" name="id_client">

                                                        <option>Choissisez le client</option>

                                                        @foreach ($clients as $cli)
                                                            <option value="{{ $cli->id }}">{{ $cli->nom_prenom }}</option>
                                                        @endforeach


                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Choisire le modèle</label>
                                                    <select class="form-control" name="id_modele">

                                                        <option>Choissisez le modele</option>

                                                        @foreach ($modele as $mod)
                                                            <option value="{{ $mod->id }}">{{ $mod->libele_modele }} ({{ $mod->type_modele }})</option>
                                                         @endforeach

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Mesure de la tête</label>
                                                    <input type="number" class="form-control" name="mes_tete" placeholder="00 cm">
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Mesure de cou</label>
                                                    <input type="number" class="form-control" name="mes_cou" placeholder="00 cm">
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Mesure d'épaule</label>
                                                    <input type="number" class="form-control" name="mes_epaule" placeholder="00 cm">
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Longueur de bras</label>
                                                    <input type="number" class="form-control" name="mes_longueur_bras" placeholder="00 cm">
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Mesure de la poitrine </label>
                                                    <input type="number" class="form-control" name="mes_poitrine " placeholder="00 cm">
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Dessous de poitrine</label>
                                                    <input type="number" class="form-control" name="mes_dessous_poitrine" placeholder="00 cm">
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Tour de taille</label>
                                                    <input type="number" class="form-control" name="mes_tour_taille" placeholder="00 cm">
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Circonférence aux os iliaques</label>
                                                    <input type="number" class="form-control" name="mes_os_iliaque" placeholder="00 cm">
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Mesure de hanches</label>
                                                    <input type="number" class="form-control" name="mes_manches" placeholder="00 cm">
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Mesure de cuisse</label>
                                                    <input type="number" class="form-control" name="mes_cuisse" placeholder="00 cm">
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Mesure de genou</label>
                                                    <input type="number" class="form-control" name="mes_genou" placeholder="00 cm">
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Mesure de mollet</label>
                                                    <input type="number" class="form-control" name="mes_mollet" placeholder="00 cm">
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Mesure de cheville</label>
                                                    <input type="number" class="form-control" name="mes_cheville" placeholder="00 cm">
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Mesure de biceps</label>
                                                    <input type="number" class="form-control" name="mes_biceps" placeholder="00 cm">
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Mesure de coude</label>
                                                    <input type="number" class="form-control" name="mes_zoude" placeholder="00 cm">
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Mesure d'avant-bras</label>
                                                    <input type="number" class="form-control" name="mes_avant_bras" placeholder="00 cm">
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Mesure de poignet</label>
                                                    <input type="number" class="form-control" name="mes_poignet" placeholder="00 cm">
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Mesure de Poignet-coude</label>
                                                    <input type="number" class="form-control" name="mes_poignet_coude" placeholder="00 cm">
                                                </div>
                                            </div>


                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Mesure de Genou-cheville</label>
                                                    <input type="number" class="form-control" name="mes_genou_cheville" placeholder="00 cm">
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Mesure d'entrejambe</label>
                                                    <input type="number" class="form-control" name="mes_entrejambe" placeholder="00 cm">
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Mesure de Couture extérieure</label>
                                                    <input type="number" class="form-control" name="mes_couture_exterieure" placeholder="00 cm">
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="">Mesure de Hauteur totale</label>
                                                    <input type="number" class="form-control" name="mes_hauteur_totale" placeholder="00 cm">
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="">Observation</label>
                                                    <textarea class="form-control" name="observation" rows="5" placeholder="Message ..."></textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </section>

                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary">ENREGISTRER</button>
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
