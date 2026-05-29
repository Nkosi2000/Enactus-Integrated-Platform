<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Programme extends Model
{
    use HasFactory;

    protected $table = 'programme';
    
    protected $fillable = [
        'name', 
        'type', 
        'start_date', 
        'end_date',
    ];

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }
}