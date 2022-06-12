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
        Schema::create('registro_de_empleados', function (Blueprint $table) {
            $table->bigIncrements('codigo_empleado');
            $table->string('nombre_empleado');
            $table->string('numero_telefono');
            $table->string('correo');
            $table->string('direccion', 100);
            $table->string('departamento');
            $table->bigInteger('usuario')->unsigned();
            $table->foreign('usuario')->references('id')->on('users')->onDelete("cascade");
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
        Schema::dropIfExists('registro_de_empleados');
    }
};
