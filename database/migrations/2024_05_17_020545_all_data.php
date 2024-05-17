<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AllData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_data', function (Blueprint $table) {
            $table->id(); // Llave primaria autoincremental
            $table->unsignedBigInteger('country_id'); // Llave foránea que referencia a countries
            $table->unsignedBigInteger('city_id'); // Llave foránea que referencia a cities
            $table->decimal('money_cop', 15, 2)->nullable(); // Dinero en COP
            $table->decimal('money_foreign_currency', 15, 2)->nullable(); // Dinero en otra divisa
            $table->string('climate')->nullable(); // Clima
            $table->decimal('exchange_rate', 15, 6)->nullable(); // Tasa de cambio
            $table->timestamps(); // Columnas created_at y updated_at

            // Definir las relaciones con las tablas countries y cities
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('all_data');
    }
}
