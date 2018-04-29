<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('teamname',70)->nullable()->unique();
            $table->integer('teamleader_id')->unsigned()->index()->nullable();
            $table->foreign('teamleader_id')->references('id')->on('users')->onDelete('set null');
            $table->integer('team1_id')->unsigned()->index()->nullable();
            $table->foreign('team1_id')->references('id')->on('users')->onDelete('set null');
            $table->integer('team2_id')->unsigned()->index()->nullable();
            $table->foreign('team2_id')->references('id')->on('users')->onDelete('set null');
            $table->string('programingLanguages','256')->nullable();
            $table->string('enviroment')->nullable();
            $table->string('linkToCloud')->nullable();
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
        Schema::dropIfExists('teams');
    }
}
