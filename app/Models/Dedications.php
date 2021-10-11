<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dedications extends Model
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_dedication';

    protected $fillable =  [ "jenis_kegiatan", "jenis_kegiatan_select", "bukti_penugasan", "bukti_penugasan1", "bukti_penugasan2", "sks_bukti_penugasan", "masa_penugasan", "bukti_dokumen", "bukti_dokumen1", "bukti_dokumen2", "bukti_dokumen3", "sks_bukti_dokumen", "rekomendasi" ];
}
