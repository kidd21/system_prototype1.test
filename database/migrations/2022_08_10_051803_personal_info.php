<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('personal_info', function (Blueprint $table) 
        {
            $table->id();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('sex');
            $table->string('contact_number');
            $table->string('religion');
            $table->string('email');
            $table->string('cell_number');
            $table->integer('age');
            $table->date('date_of_birth');
            $table->string('place_of_birth');
            $table->string('nationality');
            $table->string('permanent_add');
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
        //
    }
};
