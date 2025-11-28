<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ComponentAttribute extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'component_id',
        'name',
        'label',
        'qty',
        'value',
        'total_expense'
    ];
    public function component()
    {
        return $this->belongsTo(Component::class);
    }
}
