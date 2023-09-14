<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\CommandesController;
use App\Http\Controllers\ComptesController;
use App\Http\Controllers\ModelesController;
use App\Http\Controllers\FacturesController;
use App\Http\Controllers\DepensesController;
use App\Http\Controllers\PersonnelsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('Clients/new_client', [ClientsController::class, 'create_client'])->name('create_client');
Route::get('Clients/liste_client', [ClientsController::class, 'index'])->name('liste_client');
Route::post('Clients/new_client', [ClientsController::class, 'store'])->name('store_client');



Route::get('Commandes/new_commande', [CommandesController::class, 'create_commande'])->name('create_commande');
Route::get('Commandes/liste_commande', [CommandesController::class, 'index'])->name('liste_commande');
Route::post('Commandes/new_commande', [CommandesController::class, 'store'])->name('store_commande');


Route::get('Comptes/new_compte', [ComptesController::class, 'create'])->name('new_compte');
Route::get('Comptes/liste_compte', [ComptesController::class, 'index'])->name('liste_compte');


Route::get('Modeles/new_modele', [ModelesController::class, 'create_modele'])->name('create_modele');
Route::get('Modeles/liste_modele', [ModelesController::class, 'index'])->name('liste_modele');
Route::post('Modeles/new_modele', [ModelesController::class, 'store'])->name('store_modele');


Route::get('Factures/new_facture', [FacturesController::class, 'create_facture'])->name('create_facture');
Route::get('Factures/liste_facture', [FacturesController::class, 'index'])->name('liste_facture');
Route::post('Factures/new_facture', [FacturesController::class, 'store'])->name('stort_facture');


Route::get('Depenses/new_depense', [DepensesController::class, 'create_depense'])->name('create_depense');
Route::get('Depenses/liste_depense', [DepensesController::class, 'index'])->name('liste_depense');

Route::post('Depenses/new_depense', [DepensesController::class, 'store'])->name('store_depense');


Route::get('Personnels/new_personnel', [PersonnelsController::class, 'create_personnel'])->name('create_personnel');
Route::get('Personnels/liste_personnel', [PersonnelsController::class, 'index'])->name('liste_personnel');
Route::post('Personnels/new_personnel', [PersonnelsController::class, 'store'])->name('store_personnel');





Route::get('/liste_user', function () {
    return view('liste_user');
})->middleware(['auth', 'verified'])->name('liste_user');







Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

