<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ComponentEntity extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'component_id',
        'report_component_id',
        'name',
        'label',
        'type',
        'description',
    ];

    public function component()
    {
        return $this->belongsTo(Component::class);
    }

    public function reportComponent()
    {
        return $this->belongsTo(ReportComponent::class);
    }
}
