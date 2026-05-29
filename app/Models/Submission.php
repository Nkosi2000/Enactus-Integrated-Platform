<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Submission extends Model
{
    use HasFactory;

    protected $table = 'submission';
    
    protected $fillable = [
        'programme_id', 
        'project_id', 
        'student_id', 
        'submission_date', 
        'data',
    ];

    protected $casts = [
        'data' => 'array',                // automatically decode/encode JSON
        'submission_date' => 'date',
    ];

    public function programme()
    {
        return $this->belongsTo(Programme::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}