<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->nullable() ;
            $table->string('name',255);
            $table->string('email',225)->nullable();
            $table->string('contact',12)->nullable();
            $table->string('CNIC',13)->nullable();
            $table->integer('age');
            $table->char('sex',1);//mfo
           
           
            $table->text('comments')->nullable();
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
        Schema::drop('patients');
    }
}
