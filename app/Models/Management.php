<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_management';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'm_name'
    ];

    /**
     * Get the teams for the blog post.
     */
    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}
