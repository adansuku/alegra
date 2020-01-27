<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Patient_doctor
 * @package App\Models
 * @version August 5, 2019, 9:28 pm UTC
 *
 * @property \App\Models\Patient patient
 * @property string nombre_doctor
 * @property string observaciones_doctor
 * @property integer patient_id
 */
class Patient_doctor extends Model
{
    use SoftDeletes;

    public $table = 'patient_doctors';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre_doctor',
        'observaciones_doctor',
        'patient_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre_doctor' => 'string',
        'observaciones_doctor' => 'string',
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
