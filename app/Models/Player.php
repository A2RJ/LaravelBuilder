<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_player';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'ign',
        'igid',
        'igrole'
    ];
    
    /**
     * Get the team for the blog post.
     */
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
    
    /**
     * Get the management for the blog post.
     */
    public function management()
    {
        $team = $this->team();
        return $this->belongsTo(Team::class, 'team_id', $team->id_team);
    }
}
