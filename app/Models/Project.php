<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $table = 'project';
    
    protected $fillable = [
        'name', 
        'university_id', 
        'start_date', 
        'current_stage', 
        'sector', 
        'description',
    ];

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public function memberships()
    {
        return $this->hasMany(ProjectMembership::class);
    }

    public function metrics()
    {
        return $this->hasMany(Metric::class);
    }

    public function awards()
    {
        return $this->hasMany(Award::class);
    }

    public function leaderboardScores()
    {
        return $this->hasMany(LeaderboardScore::class);
    }
}