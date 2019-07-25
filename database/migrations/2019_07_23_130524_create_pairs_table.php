<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pairs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('topics_id');
            $table->string('students_one');
            $table->string('students_two');
            $table->string('one_fname');
            $table->string('one_lname');
            $table->string('two_fname');
            $table->string('two_lname');
            $table->string('topic');
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
        Schema::dropIfExists('pairs');
    }
}
