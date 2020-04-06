<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('c_name');
            $table->string('c_slug')->unique();
            $table->string('c_avatar')->nullable()->default('images/default-image.jpg');
            $table->string('c_banner')->nullable();
            $table->string('c_description')->nullable();
            $table->integer('c_parent_id')->default(0)->index();
            $table->tinyInteger('c_hot')->default(0);
            $table->tinyInteger('c_status')->default(1);
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
        Schema::dropIfExists('categories');
    }
}
