<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class University extends Model
{
    use HasFactory;

    protected $table = 'university';
    
    protected $fillable = ['name', 'short_name'];

    public function campuses()
    {
        return $this->hasMany(Campus::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}