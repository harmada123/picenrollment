<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_number')->nullable();
            $table->string('name');
            $table->string('mname');
            $table->string('lname');
            $table->string('gender');
            $table->string('address');
            $table->integer('photo_id')->nullable();
            $table->date('birthday')->nullable();
            $table->string('course')->nullable();
            $table->integer('section_id')->nullable();
            $table->date('year_enrolled')->nullable();
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
        Schema::dropIfExists('students');
    }
}
