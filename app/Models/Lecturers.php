<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturers extends Model
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_lecturer';

    protected $fillable =  [ "no_sertifikat", "sertifikat_file", "nip", "nidn", "nama_dosen", "gelar_depan", "gelar_belakang", "alamat", "jab_functional", "tanggal_lahir", "tempat_lahir", "s1", "s1_file", "s2", "s2_file", "s3", "s3_file", "jenis", "bidang_ilmu", "asesor1", "nip_asesor1", "asesor2", "nip_asesor2", "nomor", "tahun_akademik", "semester", "email", "ktp" ];
}
