<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Patient_allergy
 * @package App\Models
 * @version April 28, 2019, 9:22 am UTC
 *
 * @property \App\Models\Patient patient
 * @property string nombre_alergia
 * @property string alergia
 * @property string tratamiento
 * @property integer patient_id
 */
class Patient_allergy extends Model
{
    use SoftDeletes;

    public $table = 'patient_allergies';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre_alergia',
        'alergia',
        'patient_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre_alergia' => 'string',
        'alergia' => 'array',
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
