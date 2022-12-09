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
        Schema::create('emplois', function (Blueprint $table) {
            $table->increments('id');
            $table->date('jours');
            $table->string('creneau_horaire');
            $table->string('heure_debut');
            $table->string('heure_fin');
            $table->string('section');
            $table->string('groupe');
            $table->unsignedInteger('type_emplois');
            $table->unsignedInteger('type_intervention');
            $table->unsignedInteger('matieres');
            $table->unsignedInteger('autorisation_id');
            $table->timestamps();
            $table->foreign('autorisation_id')->references('id')->on('autorisations')->onDelete('cascade');
            $table->foreign('type_emplois')->references('id')->on('type_emplois')->onDelete('cascade');
            $table->foreign('type_intervention')->references('id')->on('type_interventions')->onDelete('cascade');
            $table->foreign('matieres')->references('id')->on('matieres')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emplois');
    }
};
