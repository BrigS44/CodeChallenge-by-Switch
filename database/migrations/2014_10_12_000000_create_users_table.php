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
            $table->string('name',70);
            $table->string('email',70)->unique();
            $table->string('password');
            $table->string('index_number',20)->nullable();
            $table->string('phone',15)->nullable();
            $table->string('faculty',70)->nullable();
            $table->string('study',70)->nullable();
            $table->enum('type', array("admin","student"))->default('student');
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
