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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->enum('model', ['audi', 'vaz', 'volkswagen', 'bmw', 'porsche', 'mazda', 'kia', 'volvo', 'mercedes']);
            $table->string('reg_number', 12);
            $table->string('region', 4);
            $table->double('price_by_day');
            $table->enum('transmission', ['auto', 'manual', 'robot']);
            $table->integer('doors_number');
            $table->integer('power');
            $table->enum('body_type', ['sedan', 'all_round', 'hatchback']);
            $table->integer('year');
            $table->integer('engine');
            $table->unsignedBigInteger('station_id');
            $table->timestamps();

            $table->foreign('station_id')->references('id')->on('stations');
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
};
