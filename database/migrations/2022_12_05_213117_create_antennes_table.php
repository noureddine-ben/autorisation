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
        Schema::create('antennes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('libelle');
            $table->string('zdresse');
            $table->string('ville');
            $table->string('telephone');
            $table->string('fix');
            $table->string('email');
            $table->string('siteweb')->nullable();
            $table->string('logo')->nullable();
            $table->unsignedInteger('etablisment_id');

            $table->foreign('etablisment_id')->references('id')->on('etablisments')->onDelete('cascade');

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
        Schema::dropIfExists('antennes');
    }
};
