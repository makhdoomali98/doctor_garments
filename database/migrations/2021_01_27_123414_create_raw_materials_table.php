<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRawMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raw_materials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('purcahse_date');
            $table->string('type');
            $table->string('season');
            $table->string('material');
            $table->string('color_name');
            $table->string('color_code');
            $table->integer('price/m');
            $table->integer('meters_purchased');
            $table->integer('sq_meters');
            $table->unsignedBigInteger('investment_id');

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
        Schema::dropIfExists('raw_materials');
    }
}
