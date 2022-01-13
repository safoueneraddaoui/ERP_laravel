<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Hyn\Tenancy\Traits\UsesSystemConnection;


class Plan extends Model
{
    use UsesSystemConnection;    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'price',
        'plan_period',
        'plan_interval',
        'trial_period',
        'trial_interval',
    ];

    /**
     * Automatically cast attributes to given types
     * 
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'price' => 'integer',
        'plan_period' => 'integer',
        'plan_interval' => 'string',
        'trial_period' => 'integer',
        'trial_interval' => 'string',
        'grace_period' => 'integer',
    ];
    public function PlanFeature(){
        return $this->hasOne(Plan_Feature::class);
    }

    
}
