<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('email');
            $table->string('phone');
            $table->string('department');
            $table->string('student_id');
            $table->string('certificate_type');
            $table->string('expected_time');
            $table->string('fee');
            $table->string('payment_method');
            $table->string('account_number');
            $table->string('transaction_id');

            $table->timestamps();
        });
    }


    // $user->registartionId = str_rand(6 only digit)->unique;

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
