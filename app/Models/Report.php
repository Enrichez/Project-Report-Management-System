<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'name',
        'content',
        'start_time',
        'end_time',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function components()
    {
        return $this->hasMany(ReportComponent::class);
    }
}
