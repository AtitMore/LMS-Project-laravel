<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('gender')->nullable();
            $table->boolean('status');
            $table->string('username')->unique();
            $table->string('slug')->unique();
            $table->string('age')->nullable();  
            $table->string('avatar')->nullable();
            $table->string('coverpic')->nullable(); 
            $table->string('about_user')->nullable();
            $table->string('country_location')->nullable();
            $table->string('state_location')->nullable();
            $table->string('city_location')->nullable();
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
        Schema::dropIfExists('Admins');
    }
}
