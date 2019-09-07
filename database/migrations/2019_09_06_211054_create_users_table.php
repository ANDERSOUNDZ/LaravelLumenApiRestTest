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
        Schema::create('users', function (Blueprint $table) {
            //Creacion de modelo y atributos:
            $table->increments('id');
            $table->string('name');
            $table->string('usernamename');
            $table->string('email')->unique();
            $table->string('password');
            //Laravel te recuerda el token del usuario
            $table->rememberToken();
            //Guardar API Token
            $table->string('api_token', 60)->unique();
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
        Schema::dropIfExist('users');
    }
}
