<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pro_name');
            $table->string('pro_slug')->index()->unique();
            $table->integer('pro_price')->default(0);
            $table->integer('pro_category_id')->default(0);
            $table->integer('pro_admin_id')->default(0);
            $table->tinyInteger('pro_sale')->default(0)->nullable();
            $table->string('pro_avatar')->nullable()->default('images/default-image.jpg');
            $table->integer('pro_view')->default(0);
            $table->tinyInteger('pro_hot')->index()->default(0);
            $table->tinyInteger('pro_active')->index()->default(1);
            $table->integer('pro_pay')->default(0);
            $table->mediumText('pro_description')->nullable();
            $table->text('pro_content')->nullable();
            $table->integer('pro_review_total')->default(0);
            $table->integer('pro_review_star')->default(0);
            $table->tinyInteger('pro_provider')->default(0);
            $table->string('pro_style')->nullable(); // Kiểu dáng
            $table->string('pro_type')->nullable(); // Loại đàn
            $table->string('pro_strings')->nullable(); // Số dây
            $table->string('pro_button')->nullable(); // Số phím
            $table->tinyInteger('pro_eq_pickup')->default(0); // EQ & Pickup
            $table->string('pro_body')->nullable(); // Mặt đàn
            $table->string('pro_back')->nullable(); // Lưng đàn
            $table->string('pro_hip')->nullable(); // Hông đàn
            $table->string('pro_keyboard')->nullable(); // Phím đàn
            $table->string('pro_neck')->nullable(); // Cần đàn
            $table->string('pro_keyboard_face')->nullable(); // Mặt phím
            $table->string('pro_bridge')->nullable(); // Ngựa đàn
            $table->string('pro_comb')->nullable(); // Lược đàn
            $table->string('pro_string_type')->nullable(); // Dây đàn
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
        Schema::dropIfExists('products');
    }
}
