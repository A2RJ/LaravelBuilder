<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->foreign(['user_id'], 'teams_ibfk_1')->references(['id_user'])->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['management_id'], 'teams_ibfk_2')->references(['id_management'])->on('managements')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->dropForeign('teams_ibfk_1');
            $table->dropForeign('teams_ibfk_2');
        });
    }
}
