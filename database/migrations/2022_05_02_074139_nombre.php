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
        Schema::create('usuari', function (Blueprint $table) {
            $table->string('NIU')->unique();
            $table->string('nom');
            $table->string('cognoms');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('idioma',['Español', 'Català', 'English']);
            $table->enum('type',['Alumno', 'Profesor']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
