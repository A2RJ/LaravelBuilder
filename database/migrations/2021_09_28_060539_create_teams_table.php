<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id_team');
            $table->unsignedInteger('user_id')->index('user_id');
            $table->unsignedInteger('management_id')->index('management_id');
            $table->string('team_name', 100);
            $table->string('team_logo', 100);
            $table->enum('game_name', ['pubg pc', 'pubg mbile', 'valorant', 'cs go', 'mobile legends', 'free fire', 'pes']);
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
