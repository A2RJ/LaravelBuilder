<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnivsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('univs', function (Blueprint $table) {
            $table->integer('id_univ', true);
            $table->enum('jenis_perguruan_tinggi', ['universitas', 'institut', 'sekolah tinggi', 'politeknik']);
            $table->string('nama_univ');
            $table->string('nama_rektor');
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
        Schema::dropIfExists('univs');
    }
}
