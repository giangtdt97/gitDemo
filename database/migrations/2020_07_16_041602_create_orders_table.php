<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('order_code');
            $table->integer('buyer_id');
            $table->integer('seller_id');
            $table->integer('address_id');
            $table->smallInteger('status');
            $table->timestamps();
            $table->bigInteger('total_point');
            $table->bigInteger('total_price');
            $table->bigInteger('total_profit_point');
            $table->bigInteger('total_profit_price');
            $table->integer('quantity');
            $table->integer('accumulated_points');
            $table->double('collect_point_rate');
            $table->tinyInteger('was_accumulated');
            $table->tinyInteger('refund_point_for_buyer');
            $table->tinyInteger('add_point_for_seller');
            $table->tinyInteger('refund_accumulated');
            $table->integer('id_dispute_user');
            $table->string('dispute_content');
            $table->string('admin_comment');
            $table->integer('last_result');
            $table->integer('cancel_id');
            $table->text('cancel_reason');
            $table->timestamp('end_time_change_to_received');
            $table->timestamp('end_time_change_to_success');
            $table->timestamp('end_time_to_dispute');
            $table->integer('status_before_dispute');

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
