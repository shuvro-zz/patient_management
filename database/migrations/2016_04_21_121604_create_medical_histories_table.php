<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_histories', function (Blueprint $table) {
            $table->increments('id');
           
            
            $table->integer('pid');
            $table->char('bloodGroup',3);
            $table->text('disease')->nullable();
            $table->text('allergy')->nullable();
            $table->text('medicine')->nullable();
         //   $table->text('diagnosis')->nullable();
            
            
            
            
            
            
            
            
            
            
            
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
        Schema::drop('medical_histories');
    }
}
