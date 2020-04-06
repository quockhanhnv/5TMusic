<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('course_name')->nullable();
            $table->string('course_slug')->index()->unique();
            $table->integer('course_price')->default(0);
            $table->integer('course_price_entry')->default(0)->comment('giá nhập');
            $table->integer('course_category_id')->default(0);
            $table->integer('course_admin_id')->default(0);
            $table->tinyInteger('course_sale')->default(0);
            $table->string('course_avatar')->nullable();
            $table->integer('course_view')->default(0);
            $table->tinyInteger('course_hot')->index()->default(0);
            $table->tinyInteger('course_active')->index()->default(1);
            $table->integer('course_pay')->default(0);
            $table->mediumText('course_description')->nullable();
            $table->text('course_content')->nullable();
            $table->integer('course_review_total')->default(0);
            $table->integer('course_review_star')->default(0);
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
        Schema::dropIfExists('courses');
    }
}
