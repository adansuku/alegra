<?php

namespace App\Models;
use Eloquent as Model;

/**
 * Class Patient_health_option
 * @package App\Models
 *
 * @property integer id
 * @property string patient_id 
 * @property integer health_indicator_options_id
 */
class Patient_health_option extends Model
{
    public $table = 'patient_health_indicator_options';

    public $fillable = [
        'patient_id',
        'health_indicator_options_id'
    ];

    public function patient()
    {
        return $this->belongsTo(\App\Models\Patient::class);
    }

    public function health_indicator_options()
    {
        return $this->belongsTo(\App\Models\Health_indicator_option::class);
    }
}