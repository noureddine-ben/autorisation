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
        Schema::create('infoprofessionneles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fonction');
            $table->unsignedInteger('personnelle_id');
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
        Schema::dropIfExists('infoprofessionneles');
    }
};
