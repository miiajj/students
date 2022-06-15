<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->string('school_name', 20);
            $table->string('district', 20);
            $table->string('id', 12)->primary();
            $table->string('class_name', 10);
            $table->string('name', 50);
            $table->date('dob');
            $table->boolean('gender')->default(0);
            $table->string('place_birth', 16);
            $table->string('ethnic', 12);
            $table->string('permanent_residence', 100);
            $table->string('phone', 12);
            $table->unsignedTinyInteger('total_point_1');
            $table->unsignedTinyInteger('total_point_2');
            $table->unsignedTinyInteger('total_point_3');
            $table->unsignedTinyInteger('total_point_4');
            $table->unsignedTinyInteger('total_point_5');
            $table->unsignedTinyInteger('total_point_years');
            $table->unsignedTinyInteger('priority_point')->nullable();
            $table->unsignedTinyInteger('total_prequalifi_point');
            $table->string('note', 50)->nullable();
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
        Schema::dropIfExists('students');
    }
}
