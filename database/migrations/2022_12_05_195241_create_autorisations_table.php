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
        Schema::create('autorisations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reference');
            $table->date('date_autorisation');
            $table->string('type_autorisation');
            $table->string('type_beneficiaire');
            $table->string('nom');
            $table->string('prenom');
            $table->string('nom_ar');
            $table->string('prenom_ar');
            $table->string('type_etablissment_o');
            $table->string('etablissment_o');
            $table->string('etablissment_o_ar');
            $table->string('type_etablissment_c');
            $table->string('etablissment_c');
            $table->string('etablissment_c_ar');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('annees_univ');
            $table->string('periode');
            $table->string('etat_sous_ordon')->nullable();
            $table->date('date_signature_sous_ordon')->nullable();
            $table->string('etat_ordon')->nullable();
            $table->date('date_signature_ordon')->nullable();
            $table->unsignedInteger('personnelle_id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('personnelle_id')->references('id')->on('infopersonnelles')->onDelete('cascade');
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
        Schema::dropIfExists('autorisations');
    }
};
