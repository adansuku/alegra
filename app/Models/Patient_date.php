<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Patient_date
 * @package App\Models
 * @version August 5, 2019, 9:04 pm UTC
 *
 * @property \App\Models\Patient patient
 * @property string fecha_paciente
 * @property string fecha_paciente
 * @property string documento_fecha_paciente
 * @property integer patient_id
 */
class Patient_date extends Model
{
    use SoftDeletes;

    public $table = 'patient_dates';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'fecha_paciente',
        'desc_fecha_paciente',
        'documento_fecha_paciente',
        'patient_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fecha_paciente' => 'date',
        'desc_fecha_paciente' => 'string',
        'documento_fecha_paciente' => 'string',
        'patient_id' => 'integer'
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
    public function patient()
    {
        return $this->belongsTo(\App\Models\Patient::class);
    }
}
