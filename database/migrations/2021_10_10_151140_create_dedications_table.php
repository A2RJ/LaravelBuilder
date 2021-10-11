<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDedicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dedications', function (Blueprint $table) {
            $table->integer('id_dedication', true);
            $table->text('jenis_kegiatan');
            $table->text('jenis_kegiatan_select');
            $table->text('bukti_penugasan');
            $table->text('bukti_penugasan1');
            $table->text('bukti_penugasan2');
            $table->integer('sks_bukti_penugasan');
            $table->string('masa_penugasan', 100);
            $table->text('bukti_dokumen');
            $table->text('bukti_dokumen1');
            $table->text('bukti_dokumen2');
            $table->text('bukti_dokumen3');
            $table->integer('sks_bukti_dokumen');
            $table->string('rekomendasi', 100);
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
        Schema::dropIfExists('dedications');
    }
}
