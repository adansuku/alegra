<?php

namespace App\Models;

use Eloquent as Model;


class Patient_centro_dia extends Model
{

    public $table = 'centro_dias';
    

    public $fillable = [
        'dia_centro',
        'patient_centro_id',
        'horario'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'horario' => 'string',
        'dia_centro' => 'string',
        'patient_centro_id' => 'integer'
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
    public function patient_centro()
    {
        return $this->belongsTo(\App\Models\Patient_centro::class);
    }
}
