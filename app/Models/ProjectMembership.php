<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectMembership extends Model
{
    use HasFactory;

    protected $table = 'project_membership';
    
    protected $fillable = [
        'student_id', 
        'project_id', 
        'role', 
        'start_date', 
        'end_date',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}