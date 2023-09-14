
<!--**********************************
        Sidebar start Menu Principale
    ***********************************-->
<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Menu Principale</li>
            <hr>
            <li>
                <a href="{{ route('dashboard') }}">Page d'accueil</a>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-users"></i><span class="nav-text">Gestion Clients</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('create_client') }}" >Ajouter un Client</a></li>
                    <li><a href="{{ route('liste_client') }}">Liste des Clients</a></li>
                </ul>
            </li>

            <li class="mega-menu mega-menu-sm">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                     <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Gestion Modèles</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('create_modele') }}">Créer un Modèle</a></li>
                    <li><a href="{{ route('liste_modele') }}">Liste des Modèles</a></li>
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-note menu-icon"></i><span class="nav-text">Gestion Commandes</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('create_commande') }}">Ajouter une Commande</a></li>
                    <li><a href="{{ route('liste_commande') }}">Liste des Commandes</a></li>
                </ul>
            </li>

            <li class="mega-menu mega-menu-sm">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-money"></i><span class="nav-text">Gestion Factures</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('stort_facture') }}">Créer une facture</a></li>
                    <li><a href="{{ route('liste_facture') }}">Liste des Factures</a></li>
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                   <i class="fa fa-user"></i></i><span class="nav-text">Gestion Personnels</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('create_personnel') }}">Ajouter un Personnel</a></li>
                    <li><a href="{{ route('liste_personnel') }}">Liste des Personnels</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                     <i class="icon-notebook menu-icon"></i><span class="nav-text">Gestion Dépenses</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('create_depense') }}">Créer un Dépense</a></li>
                    <li><a href="{{ route('liste_depense') }}">Liste des Dépenses</a></li>
                </ul>
            </li>

            {{-- <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-grid menu-icon"></i><span class="nav-text">Gestion Utilisateurs</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('new_compte') }}">Créer un User</a></li>
                    <li><a href="{{ route('liste_compte') }}">Liste des Users</a></li>
                </ul>
            </li> --}}

        </ul>
    </div>
</div>

<!--**********************************
    Sidebar fin Menu Principale
***********************************-->
