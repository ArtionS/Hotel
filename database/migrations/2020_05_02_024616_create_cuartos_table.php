<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuartosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuartos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('personas');
            $table->bigIncrements('categoria_cuarto_id');
            $table->bigIncrements('disponibilidad');
            $table->bigIncrements('limpiesa');
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
        Schema::dropIfExists('cuartos');
    }
}
