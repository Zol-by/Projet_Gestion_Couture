@extends('layouts.main')

@section('content')

<br>


    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
            <h3 class="text-center"><strong>ENREGISTREMENT D'UN COMPTE UTILISATEUR</strong></h3>
            <form method="POST" action="{{ route('register') }}"  class="step-form-horizontal">
                <div>
                    <section>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label :value="__('Entrer le nom')">Entrer le nom et prénom</label>
                                    <input type="text" id="name" name="name" :value="old('name')" class="form-control"  required autofocus autocomplete="name">
                                    <em :messages="$errors->get('name')"></em>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label :value="__('Entrer e-mail')">Entrer l'adresse e-mail</label>
                                    <input type="email" id="email" name="email" class="form-control" :value="old('email')" :value="old('email')" required autocomplete="username">
                                    <em :messages="$errors->get('email')"></em>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label :value="__('Votre mot de passe')">Entrer le mot de passe</label>
                                    <input type="text"id="password" name="password" class="form-control"  required>
                                    <em :messages="$errors->get('password')" ></em>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label :value="__('Confirmez votre mot de passe')">Confirmer le mot de passe</label>
                                    <input type="text" id="password_confirmation" name="password_confirmation" :value="__('Confirmez votre mot de passe')" class="form-control"  required>
                                    <em :messages="$errors->get('password_confirmation')"></em>
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




