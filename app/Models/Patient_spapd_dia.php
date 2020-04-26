<?php

namespace App\Models;

use Eloquent as Model;


class Patient_spapd_dia extends Model
{

    public $table = 'patient_spapd_dias';
    

    public $fillable = [
        'fecha_inicio',
        'dia_spapd',
        'patient_spapd_id',
        'duracion_spapd'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fecha_inicio' => 'string',
        'dia_spapd' => 'string',
        'duracion_spapd' => 'string',
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
