<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('time');
            $table->string('attandence');
            $table->longText('report');
            $table->unsignedInteger('advisor_id');
            $table->unsignedInteger('student_id');
            $table->foreign('advisor_id')
                ->references('id')
                ->on('advisors');
            $table->foreign('student_id')
                ->references('id')
                ->on('students');
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
        Schema::dropIfExists('meetings');
    }
}
