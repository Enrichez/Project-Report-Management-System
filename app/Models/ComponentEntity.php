<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ComponentEntity extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'report_component_id',
        'name',
        'label',
        'type',
        'description',
    ];

    // Relation to Parent Record / ReportComponent
    public function reportComponent()
    {
        return $this->belongsTo(ReportComponent::class);
    }

    public function componentValues()
    {
        return $this->hasMany(ComponentValue::class, 'entity_id');
    }
}
