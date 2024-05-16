<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTakenCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()   
    {
        Schema::create('taken_courses', function (Blueprint $table) {
            $table->id(); 
            $table->string('std_id');
            $table->string('course_semester');
            $table->string('course_name');
            $table->string('credit'); 
            $table->string('type');
            $table->string('course_batch');
            $table->string('allow_status');
            $table->string('marks')->nullable();
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
        Schema::dropIfExists('taken_courses');
    }
}
