<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmploymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date');
            $table->string('name');
            $table->string('address');
            $table->string('religion');
            $table->string('sex');
            $table->string('age');
            $table->string('dob');
            $table->string('phone');
            $table->string('social');
            $table->string('marital-status');
            $table->string('dependents');
            $table->string('position');
            $table->string('salary');
            $table->string('available');
            $table->string('days-hours');
            $table->string('sname');
            $table->string('employed');
            $table->string('saddress');
            $table->string('sphone');
            $table->string('emergency-name');
            $table->string('emergency-phone');
            $table->string('elementary');
            $table->string('highschool');
            $table->string('college');
            $table->string('specialization');
            $table->string('1from');
            $table->string('1to');
            $table->string('1position');
            $table->string('1employer');
            $table->string('1address');
            $table->string('1phone');
            $table->string('1salary');
            $table->string('1leaving');
            $table->string('2from');
            $table->string('2to');
            $table->string('2position');
            $table->string('2employer');
            $table->string('2address');
            $table->string('2phone');
            $table->string('2salary');
            $table->string('2leaving');
            $table->string('volunteer');
            $table->string('talents');
            $table->string('1ref');
            $table->string('1refaddress');
            $table->string('1refphone');
            $table->string('2ref');
            $table->string('2refaddress');
            $table->string('2refphone');
            $table->string('3ref');
            $table->string('3refaddress');
            $table->string('3refphone');
            $table->string('why');
            $table->softDeletes();
            $table->rememberToken();
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
        Schema::dropIfExists('employments');
    }
}
