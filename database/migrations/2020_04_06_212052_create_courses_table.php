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
            $table->string('course_name')->unique();
            $table->string('course_slug')->index()->unique();
            $table->integer('course_price')->default(0)->nullable();
            $table->string('course_duration')->default('01 tháng')->nullable();
            $table->string('course_number_lesson')->default('8')->nullable(); // 8 buổi
            $table->string('course_number_student')->default('8')->nullable(); // 15 hv
            $table->string('course_class_schedule')->default('8')->nullable(); // 20h-22h mon, fri
            $table->integer('course_category_id')->default(0);
            $table->integer('course_user_id')->default(0)->nullable(); // teacher
            $table->tinyInteger('course_sale')->default(0)->nullable();
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
