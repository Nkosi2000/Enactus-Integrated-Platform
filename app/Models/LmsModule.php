<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LmsModule extends Model
{
    use HasFactory;

    protected $table = 'lms_module';
    
    protected $fillable = [
        'title', 
        'category', 
        'content',
    ];

    public function progress()
    {
        return $this->hasMany(LmsProgress::class);
    }
}