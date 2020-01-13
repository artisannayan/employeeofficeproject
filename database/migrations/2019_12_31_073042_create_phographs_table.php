<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhographsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phographs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('emp_id')->unsigned();
            $table->foreign('emp_id')->references('eid')->on('personal_details')->onDelete('cascade');
            $table->string('image')->nullable();
            $table->string('signature')->nullable();
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
        Schema::dropIfExists('phographs');
    }
}
