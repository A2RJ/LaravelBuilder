<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosens', function (Blueprint $table) {
            $table->integer('id_dosen', true);
            $table->string('no_sertifikat');
            $table->string('sertifikat_file');
            $table->integer('nip');
            $table->integer('nidn');
            $table->string('nama_dosen');
            $table->string('gelar_depan', 10);
            $table->string('gelar_belakang', 10);
            $table->text('alamat');
            $table->string('jab_functional', 25);
            $table->string('tanggal_lahir', 50);
            $table->string('tempat_lahir', 50);
            $table->string('s1', 50);
            $table->string('s1_file');
            $table->string('s2', 50);
            $table->string('s2_file');
            $table->string('s3', 50);
            $table->string('s3_file');
            $table->enum('jenis', ['dosen biasa', 'profesor', 'dosen dengan tugas tambahan', 'profesor  dengan tugas tambahan']);
            $table->string('bidang_ilmu', 50);
            $table->string('asesor1', 100);
            $table->string('nip_asesor1', 100);
            $table->string('asesor2', 100);
            $table->string('nip_asesor2', 100);
            $table->string('nomor', 15);
            $table->string('tahun_akademik', 10);
            $table->string('semester', 10);
            $table->string('email');
            $table->string('ktp');
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
        Schema::dropIfExists('dosens');
    }
}
