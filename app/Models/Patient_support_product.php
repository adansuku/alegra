<?php

namespace App\Models;
use Eloquent as Model;

/**
 * Class Patient_support_product
 * @package App\Models
 *
 * @property integer id
 * @property string description 
 */
class Patient_support_product extends Model
{
    public $table = 'patient_support_products';

    public $fillable = [
        'patient_id',
        'support_product_id'
    ];

    public function patient()
    {
        return $this->belongsTo(\App\Models\Patient::class);
    }

    public function support_product()
    {
        return $this->belongsTo(\App\Models\Support_product::class);
    }
}