<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_team';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'team_name',
        'game_name'
    ];

    /**
     * Get the player for the blog post.
     */
    public function player()
    {
        return $this->hasMany(Player::class);
    }
}
