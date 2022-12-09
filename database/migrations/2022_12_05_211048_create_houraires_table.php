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
        Schema::create('houraires', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mois');
            $table->integer('nbre_heure');
            $table->timestamps();
            $table->unsignedInteger('autorisation_id');

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
        Schema::dropIfExists('houraires');
    }
};
