<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Province extends Model
{
    use HasFactory;

    protected $table = 'province'; 
    protected $fillable = ['name'];

    public function campuses()
    {
        return $this->hasMany(Campus::class);
    }
}