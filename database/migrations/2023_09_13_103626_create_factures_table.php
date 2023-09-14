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
        Schema::create('factures', function (Blueprint $table) {
            
            $table->id();
            $table->unsignedBigInteger('id_client')->unsigned();
            $table->foreign('id_client')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_commande')->unsigned();
            $table->foreign('id_commande')->references('id')->on('commandes')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factures');
    }
};
