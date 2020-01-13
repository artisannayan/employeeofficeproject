<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('emp_id')->unsigned();
            $table->foreign('emp_id')->references('eid')->on('personal_details')->onDelete('cascade');
            $table->string('ExamName')->nullable();
            $table->string('board')->nullable();
            $table->string('passing_year')->nullable();
            $table->string('group')->nullable();
            $table->integer('CGPA')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('education');
    }
}
