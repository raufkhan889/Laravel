<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemindersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reminders', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('lead_id');
            $table->unsignedBigInteger('user_id');
            $table->text('note')->nullable();
            $table->text('reminder')->nullable();
            $table->date('reminder_date')->nullable();
            $table->string('status');

            $table->index(['lead_id']);

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
        Schema::dropIfExists('reminders');
    }
}
