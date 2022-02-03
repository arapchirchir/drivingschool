<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->bigIncrements('student_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_number');
            $table->enum('gender', ['Male', 'Female']);
            $table->string('user_identification');
            $table->string('user_email');
            $table->string('course_branch');
            $table->string('course_selection');
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
        Schema::dropIfExists('registrations');
    }
}
