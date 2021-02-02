<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
           $table->bigIncrements('id');
            $table->string('neck_shape');
            $table->string('product_type');
            $table->string('fabric');
            $table->string('design');
            $table->enum('gender',['male', 'female', 'other']);
            $table->string('size');
            $table->enum('selling',['yes', 'no']);
            $table->enum('in_stock',['yes', 'no']);
            $table->bigInteger('quantity');
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
        Schema::dropIfExists('inventories');
    }
}
