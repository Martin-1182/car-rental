<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->integer('kilometers');
            $table->integer('price');
            $table->integer('horse_power');
            $table->string('slug')->unique();
            $table->boolean('occupied')->default(false);
            $table->enum('fuel', ['gasoline', 'diesel', 'gas'])->default('gasoline');
            $table->enum('type', ['cargo', 'passanger', 'van'])->default('passanger');
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
        Schema::dropIfExists('cars');
    }
}
