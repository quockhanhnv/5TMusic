<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Carbon;
class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reservation_name');
            $table->string('reservation_email');
            $table->string('reservation_phone');
            $table->integer('reservation_course_id')->default(0);
            $table->string('reservation_message')->default('No message');
            $table->timestamp('reservation_time')->default(Carbon::now());
            $table->integer('reservation_status')->default(UNACCEPTED_RESERVATION);
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
        Schema::dropIfExists('reservations');
    }
}
