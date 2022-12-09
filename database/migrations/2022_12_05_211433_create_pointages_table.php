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
        Schema::create('pointages', function (Blueprint $table) {
            $table->increments('id');
            $table->date('jours');
            $table->string('creneau_horaire');
            $table->Integer('heure_debut');
            $table->Integer('heure_fin');
            $table->Integer('total');
            $table->unsignedInteger('autorisation_id');
            $table->timestamps();
            $table->foreign('autorisation_id')->references('id')->on('autorisations')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pointages');
    }
};
