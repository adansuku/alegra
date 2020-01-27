<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Patient_past
 * @package App\Models
 * @version October 21, 2019, 12:18 pm UTC
 *
 * @property \App\Models\Patient patient
 * @property string antecedentes
 * @property string antecedentes_obs
 * @property string antecedentes_anio
 * @property integer patient_id
 */
class Patient_past extends Model
{
    use SoftDeletes;

    public $table = 'patient_pasts';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'antecedentes',
        'antecedentes_obs',
        'antecedentes_anio',
        'patient_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'antecedentes' => 'string',
        'antecedentes_obs' => 'string',
        'antecedentes_anio' => 'date',
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
