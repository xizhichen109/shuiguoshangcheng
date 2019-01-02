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
            $table->increments('id');
            $table->string('photo',100)->default('');
            $table->enum('auth', ['1', '2','3'])->default('1');
            $table->string('name',30);
            $table->string('password',255);
            $table->enum('sex', ['m', 'w','n'])->default('n');
            $table->unsignedTinyInteger('age');
            $table->string('phone',30);
            $table->string('email',255);
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
        Schema::dropIfExists('users');
    }
}
