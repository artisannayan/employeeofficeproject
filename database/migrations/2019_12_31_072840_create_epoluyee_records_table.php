<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEpoluyeeRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('epoluyee_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('EmployeeId');
            $table->foreign('EmployeeId')->references('EmployeeId')->on('personal_details')->onDelete('cascade');
            $table->string('comName')->nullable();
            $table->string('bestwork')->nullable();
            $table->string('position')->nullable();
            $table->string('project')->nullable();
            $table->string('responsibility')->nullable();
            $table->string('from')->nullable();
            $table->string('To')->nullable();
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
        Schema::dropIfExists('epoluyee_records');
    }
}
