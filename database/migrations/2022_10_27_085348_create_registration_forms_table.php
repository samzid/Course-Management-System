<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */




    //  $registration_form->student_name = $request->student_name;
    //  $registration_form->student_id = $request->student_id;
    //  $registration_form->department = $request->department;
    //  $registration_form->batch = $request->batch;
    //  $registration_form->section = $request->section;
    //  $registration_form->email = $request->email;
    //  $registration_form->phone = $request->phone;
    //  $registration_form->semester = $request->semester;


    public function up()
    {
        Schema::create('registration_forms', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('student_id');
            $table->string('department');
            $table->string('batch');
            $table->string('section');
            $table->string('email');
            $table->string('phone');
            $table->string('semester');
            $table->string('status');
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
        Schema::dropIfExists('registration_forms');
    }
}
