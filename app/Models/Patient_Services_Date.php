<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Patient_Services_Date
 * @package App\Models
 * @version October 21, 2019, 7:03 pm UTC
 *
 * @property \App\Models\Patient_services patientServices
 * @property string dia_servicio
 * @property string horario_servicio
 * @property string obs_servicio
 * @property integer service_id
 */
class Patient_Services_Date extends Model
{
    use SoftDeletes;

    public $table = 'patient__services__dates';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'dia_servicio',
        'horario_servicio',
        'obs_servicio',
        'patient_service_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'dia_servicio' => 'string',
        'horario_servicio' => 'string',
        'obs_servicio' => 'string',
        'patient_service_id' => 'integer'
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
    public function patientServices()
    {
        return $this->belongsTo(\App\Models\Patient_service::class);
    }
}
