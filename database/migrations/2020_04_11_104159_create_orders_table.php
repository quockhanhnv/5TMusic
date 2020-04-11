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
            $table->integer('order_user_id')->default(0)->index();// sẽ có 2 kiểu  mua là member và khách vãng lai
            $table->integer('order_total_money')->default(0);
            $table->string('order_name')->nullable();
            $table->string('order_email')->nullable();
            $table->string('order_phone')->nullable();
            $table->string('order_address')->nullable();
            $table->string('order_note')->nullable();
            $table->tinyInteger('order_status')->default(1);
            $table->tinyInteger('order_type')->default(1)->comment(' 1 normal pay(COD), 2 pay online');
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
