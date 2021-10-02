<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id_player');
            $table->unsignedInteger('user_id')->index('user_id');
            $table->unsignedInteger('team_id')->index('team_id');
            $table->string('ign', 100);
            $table->string('igid', 100);
            $table->string('player_image', 100);
            $table->string('igrole', 100);
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
        Schema::dropIfExists('players');
    }
}
