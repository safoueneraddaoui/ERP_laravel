<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan_Feature extends Model
{
    protected $fillable = [
        'dashboard',
        'customers',
        'invoices',
        'products',
        'suppliers',
        'sales',
        'complaints',
        'returns',
        'reports',
    ];

    protected $casts = [
        'dashboard' => 'boolean',
        'customers' => 'integer',
        'invoices' => 'integer',
        'products' => 'integer',
        'suppliers' => 'boolean',
        'sales' => 'boolean',
        'complaints' => 'boolean',
        'returns' => 'boolean',
        'reports' => 'boolean',
    ];
    public function Plan(){
        return $this->belongsTo(Plan_Feature::class);
    }
}
