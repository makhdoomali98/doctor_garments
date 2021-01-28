<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_people', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->bigInteger('phone_number');
            $table->string('city');
            $table->string('address');
            $table->string('supervisor');
            $table->bigInteger('total_orders');
            $table->bigInteger('total_scrubs');
            $table->bigInteger('scrubs_per_order');
            $table->bigInteger('commissions');
            $table->bigInteger('sales_person_value');
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
        Schema::dropIfExists('sales_people');
    }
}
