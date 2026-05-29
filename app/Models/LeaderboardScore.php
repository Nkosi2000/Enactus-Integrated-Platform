<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LeaderboardScore extends Model
{
    use HasFactory;
    
    protected $table = 'leaderboard_score';

    protected $fillable = [
        'project_id', 
        'period', 
        'score', 
        'stage',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}