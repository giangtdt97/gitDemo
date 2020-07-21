<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('order_id');
            $table->integer('product_id');
            $table->integer('point');
            $table->double('price');
            $table->timestamps();
            $table->bigInteger('sum_point');
            $table->bigInteger('sum_price');
            $table->integer('quantity');
            $table->bigInteger('profit_point');
            $table->bigInteger('profit_price');
            $table->bigInteger('sum_profit_point');
            $table->bigInteger('sum_profit_price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
