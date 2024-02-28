<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voitures', function (Blueprint $table) {
            $table->id();
            $table->string('marque')->default('Inconnu');
            $table->string('couleur')->default('Inconnu');
            $table->integer('nb_place')->nullable();
            $table->string('modele')->default('Inconnu');
            $table->integer('nb_voiture')->nullable();
            $table->boolean('dispo')->default(true);
            $table->float('tarif')->nullable();
            $table->string('imgV')->default('Inconnu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voitures');
    }
};
