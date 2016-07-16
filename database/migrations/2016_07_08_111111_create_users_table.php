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
            
            $table->bigInteger('oauth')->nullable();
            $table->string('email')->nullable();
            $table->string('password');

            $table->string('name');
            $table->string('phone')->nullable();
            $table->date('date_birth')->nullable();
            $table->string('avatar')->nullable();

            $table->integer('role')->default(0);
            
            $table->string('remember_token')->nullable();
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
