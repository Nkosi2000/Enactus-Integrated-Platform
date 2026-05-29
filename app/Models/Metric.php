<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Metric extends Model
{
    use HasFactory;

    protected $table = 'metric';
    
    protected $fillable = [
        'project_id', 'reporting_period', 'revenue', 'users',
        'jobs_created', 'beneficiaries', 'funding_raised', 'cac',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}