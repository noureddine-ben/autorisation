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
        Schema::create('infopersonnelles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cine');
            $table->string('matricule');
            $table->string('nom_fr');
            $table->string('nom_ar');
            $table->string('prenom_fr');
            $table->string('prenom_ar');
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
        Schema::dropIfExists('infopersonnelles');
    }
};
