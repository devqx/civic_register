<?php

use Illuminate\Support\Facades\Schema;
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
        //create the users table using the Schema class
        Schema::create('civic_users', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('full_name');
            $table->string('phone_number');
            $table->string('email_address');
            $table->string('address');

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
        Schema::drop('civic_users');
    }
}
