<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('eid');
            $table->string('name')->nullable();
            $table->string('position')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('brother')->nullable();
            $table->string('sister')->nullable();
            $table->string('LgName')->nullable();
            $table->string('reading')->nullable();
            $table->string('speaking')->nullable();
            $table->string('writing')->nullable();
            $table->date('dob')->nullable();
            $table->string('religion')->nullable();
            $table->string('blood_group')->nullable();
            $table->integer('NID')->nullable();
            $table->text('persent_add')->nullable();
            $table->text('permanent_add')->nullable();
            $table->text('height')->nullable();
            $table->string('nationality')->nullable();
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
        Schema::dropIfExists('personal_details');
    }
}
