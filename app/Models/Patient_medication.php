<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Patient_medication
 * @package App\Models
 * @version October 21, 2019, 2:50 pm UTC
 *
 * @property \App\Models\Patient patient
 * @property string medicacion
 * @property string pauta_medicacion
 * @property string obs_medicacion
 * @property integer patient_id
 */
class Patient_medication extends Model
{
    use SoftDeletes;

    public $table = 'patient_medications';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'medicacion',
        'pauta_medicacion',
        'obs_medicacion',
        'patient_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'medicacion' => 'string',
        'pauta_medicacion' => 'string',
        'obs_medicacion' => 'string',
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
