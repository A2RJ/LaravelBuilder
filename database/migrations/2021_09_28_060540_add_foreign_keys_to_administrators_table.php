<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAdministratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('administrators', function (Blueprint $table) {
        //     $table->foreign(['user_id'], 'administrators_ibfk_1')->references(['id_user'])->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('administrators', function (Blueprint $table) {
            $table->dropForeign('administrators_ibfk_1');
        });
    }
}
