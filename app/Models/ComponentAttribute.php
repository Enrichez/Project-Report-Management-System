<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ComponentAttribute extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'report_component_id',
        'name',
        'label',
        'qty',
        'value',
        'total_expense'
    ];
    
    public function reportComponent()
    {
        return $this->belongsTo(ReportComponent::class, 'report_component_id');
    }

    public function componentValues()
    {
        return $this->hasMany(ComponentValue::class, 'attribute_id');
    }
}
