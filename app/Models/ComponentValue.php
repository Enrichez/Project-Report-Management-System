<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ComponentValue extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'report_component_id',
        'entity_id',
        'attribute_id',
        'value_string',
        'value_number',
        'value_date',
    ];

    // Relation to Column / ComponentEntity
    public function componentEntity()
    {
        return $this->belongsTo(ComponentEntity::class, 'entity_id');
    }

    // Relation to Row / ReportComponent
    public function componentAttribute()
    {
        return $this->belongsTo(ComponentAttribute::class, 'attribute_id');
    }
}
