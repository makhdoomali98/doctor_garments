<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->date('order_date');
            $table->enum('status',['pending', 'delivered', 'rejected']);
            $table->string('customer_name');
            $table->bigInteger('phone_number');
            $table->enum('size',['small','medium','large','custom']);
            $table->bigInteger('quantity');
            $table->string('color');
            $table->string('fabric');
            $table->string('design');
            $table->string('neck');
            $table->string('sales_person');
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
        Schema::dropIfExists('orders');
    }
}
