<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePairTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pair', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('cohort_id');
            $table->Integer('topic_id');
            $table->Integer('students_id1');
            $table->Integer('students_id2');
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
        Schema::dropIfExists('pair');
    }
}
