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
}
