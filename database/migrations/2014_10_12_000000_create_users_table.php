<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
			$table->string('userType'); //can be doctor can be admin 
			$table->string('contact'); 
			$table->string('qualification'); 
			$table->string('gender'); 
			$table->date('dob'); 
			$table->string('token')->nullable(); //string token for email verification at the end we will cater this 
			$table->boolean('verified')->default(false);  
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
