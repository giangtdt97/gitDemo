<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('avatar');
            $table->string('phone_number')->unique();
            $table->smallInteger('status');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('active_code');
            $table->string('code');
            $table->integer('level');
            $table->date('approved_at');
            $table->string('identity_number');
            $table->string('identity_picture_front');
            $table->string('identity_number_back');
            $table->timestamps();
            $table->bigInteger('ref_id');
            $table->string('bank_name');
            $table->string('bank_account');
            $table->string('bank_user');
            $table->string('bank_province');
            $table->string('topic');
            $table->tinyInteger('was_bonus_points_registering');
            $table->string('locate');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
}
