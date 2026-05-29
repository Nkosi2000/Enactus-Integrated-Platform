<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activity extends Model
{
    use HasFactory;

    protected $table = 'activity';
    
    protected $fillable = [
        'programme_id', 
        'name', 
        'date', 
        'type',
    ];

    public function programme()
    {
        return $this->belongsTo(Programme::class);
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
}