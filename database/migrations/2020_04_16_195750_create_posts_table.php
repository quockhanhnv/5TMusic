<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('post_name');
            $table->string('post_slug')->index();
            $table->tinyInteger('post_hot')->default(0)->index();
            $table->tinyInteger('post_active')->default(1)->index();
//            $table->integer('post_menu_id')->index()->default(0);
            $table->integer('post_user_id')->default(0);
            $table->integer('post_view')->default(0);
            $table->mediumText('post_description')->nullable();
            $table->string('post_avatar')->nullable();
            $table->text('post_content')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
