<?php

namespace App\Models;

use Eloquent as Model;


class Patient_spapd_date extends Model
{

    public $table = 'patient_spapd_dates';
    

    public $fillable = [
        'fecha_entrada',
        'fecha_salida',
        'patient_spapd_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fecha_entrada' => 'string',
        'fecha_salida' => 'string',
        'patient_spapd_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function patient_spapd()
    {
        return $this->belongsTo(\App\Models\patient_spapd::class);
    }
}
