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
        Schema::table('users', function (Blueprint $table) {
                $table->string('apellidos');
                $table->string('NIU')->unique();
                $table->enum('idioma',['Español', 'Català', 'English']);
                $table->enum('type',['Alumno', 'Profesor','Admin']);
        });
   }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
};
