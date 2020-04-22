<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('commentable_id')->default(0)->nullable(); // course_id or product_id
            $table->string('commentable_type'); // determine comment for course or product
            $table->string('commentable_name');
            $table->string('commentable_content');
            $table->string('commentable_user_id')->default(0)->nullable();
            $table->string('commentable_active')->default(1);
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
        Schema::dropIfExists('comments');
    }
}
