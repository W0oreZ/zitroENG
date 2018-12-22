<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentFormationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_formation', function (Blueprint $table) {
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('formation_id');
            $table->string('start');
            $table->string('finnish');

            $table->primary(['student_id','formation_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_formation');
    }
}
