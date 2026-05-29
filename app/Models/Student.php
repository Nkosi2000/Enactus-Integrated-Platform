<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $table = 'student';   
    
    protected $fillable = [
        'users_id',
        'university_id',
        'campus_id',
        'faculty_id',
        'year_of_study',
        'status',
        'gender',
        'population_group',
        'country_of_citizenship',
        'preferred_language',
        'self_identified_home_language',
    ];

    public function user()
    {
        return $this->belongsTo(Users::class);
    }

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public function campus()
    {
        return $this->belongsTo(Campus::class);
    }
    public function projectMemberships()
    {
        return $this->hasMany(ProjectMembership::class);
    }

    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }

    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }

    public function awards()
    {
        return $this->hasMany(Award::class);
    }

    public function lmsProgress()
    {
        return $this->hasMany(LmsProgress::class);
    }

    // faculty() will be added later when the Faculty model exists
}