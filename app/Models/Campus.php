<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Campus extends Model
{
    use HasFactory;

    protected $table = 'campus'; 
    protected $fillable = ['university_id', 'name', 'province_id'];

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}