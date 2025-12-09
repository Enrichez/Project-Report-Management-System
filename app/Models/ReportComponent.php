<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReportComponent extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'report_id',
        'component_id',
        'name',
        'total_expense',
    ];

    public function report()
    {
        return $this->belongsTo(Report::class);
    }

    public function component()
    {
        return $this->belongsTo(Component::class);
    }

    // Row relationships
    public function componentAttributes()
    {
        return $this->hasMany(ComponentAttribute::class, 'report_component_id');
    }

    // Column relationships
    public function componentEntities()
    {
        return $this->hasMany(ComponentEntity::class, 'report_component_id');
    }
}
