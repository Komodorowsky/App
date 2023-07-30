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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Paterno');
            $table->string('Materno');
            $table->Integer('Edad');
            $table->string('Sexo');
            $table->string('Calle');
            $table->Integer('NumINT');
            $table->Integer('NumEXT');
            $table->string('Colonia');
            $table->string('Municipio');
            $table->string('Estado');
            $table->string('Intereses');
            $table->string('DestinoPref');
            $table->string('Tipohab');
            $table->string('IngresoMens');
            $table->string('Viajesalanio');
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
        Schema::dropIfExists('products');
    }
};
