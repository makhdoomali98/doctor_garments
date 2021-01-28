<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('customer_name');
            $table->string('password');
            $table->bigInteger('phone_number');
            $table->string('city');
            $table->string('address');
            $table->string('marketing_reference');
            $table->string('ad_id');
            $table->enum('customer_gender', ['male','female','other']);
            $table->string('sales_person');
            $table->bigInteger('total_scrub');
            $table->bigInteger('credits');
            $table->boolean('happy');
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
        Schema::dropIfExists('customers');
    }
}
