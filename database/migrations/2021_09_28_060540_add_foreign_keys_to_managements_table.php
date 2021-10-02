<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToManagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('managements', function (Blueprint $table) {
            // $table->foreign(['administrator_id'], 'managements_ibfk_1')->references(['id_administrator'])->on('administrators')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['user_id'], 'managements_ibfk_2')->references(['id_user'])->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('managements', function (Blueprint $table) {
            $table->dropForeign('managements_ibfk_1');
            $table->dropForeign('managements_ibfk_2');
        });
    }
}
