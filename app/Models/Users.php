<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_user';

    protected $fillable =  [ "id", "name", "email", "fakultas_id", "dekan_id", "prodi_id", "kejur_id", "email_verified_at", "password", "remember_token", "created_at", "updated_at",  ];
}
