<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->Integer('mes_tete');
            $table->Integer('mes_cou');
            $table->Integer('mes_epaule');
            $table->Integer('mes_longueur_bras');
            $table->Integer('mes_poitrine');
            $table->Integer('mes_dessous_poitrine');
            $table->Integer('mes_tour_taille');
            $table->Integer('mes_os_iliaque');
            $table->Integer('mes_manches');
            $table->Integer('mes_cuisse');
            $table->Integer('mes_genou');
            $table->Integer('mes_mollet');
            $table->Integer('mes_cheville');
            $table->Integer('mes_biceps');
            $table->Integer('mes_zoude');
            $table->Integer('mes_avant_bras');
            $table->Integer('mes_poignet');
            $table->Integer('mes_poignet_coude');
            $table->Integer('mes_genou_cheville');
            $table->Integer('mes_entrejambe');
            $table->Integer('mes_couture_exterieure');
            $table->Integer('mes_hauteur_totale');
            $table->string('observation');

            $table->unsignedBigInteger('id_client')->unsigned();
            $table->foreign('id_client')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_modele')->unsigned();
            $table->foreign('id_modele')->references('id')->on('modeles')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
