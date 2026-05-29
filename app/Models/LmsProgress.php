<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LmsProgress extends Model
{
    use HasFactory;

    protected $table = 'lms_progress';
    
    protected $fillable = [
        'student_id', 
        'module_id', 
        'completion_status', 
        'score',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function module()
    {
        return $this->belongsTo(LmsModule::class, 'module_id');
    }
}