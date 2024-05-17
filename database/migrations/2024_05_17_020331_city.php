<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class city extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id(); // Llave primaria autoincremental
            $table->string('name'); // Nombre de la ciudad
            $table->unsignedBigInteger('country_id'); // Llave foránea que referencia a countries
            $table->timestamps(); // Columnas created_at y updated_at

            // Definir la relación con la tabla countries
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
