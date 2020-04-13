<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Patient_spapd
 * @package App\Models
 * @version July 31, 2019, 1:44 pm UTC
 *
 * @property \App\Models\Patient patient
 * @property string prog_spapd
 * @property string otros_programa
 * @property integer num_sesiones
 * @property string otras_sesiones
 * @property string dur_spapd
 * @property string baja_spapd
 * @property string worker_id
 * @property integer patient_id
 */
class Patient_spapd extends Model
{
    use SoftDeletes;

    public $table = 'patient_spapds';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'prog_spapd',
        'otros_programa',
        'num_sesiones',
        'otras_sesiones',
        'dur_spapd',
        'baja_spapd',
        'worker_id',
        'patient_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'prog_spapd' => 'string',
        'otros_programa' => 'string',
        'num_sesiones' => 'integer',
        'otras_sesiones' => 'string',
        'dur_spapd' => 'string',
        'worker_id' => 'string',
        'baja_spapd' => 'string',
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

    public function patient_spapd_dias()
    {
        return $this->hasMany(\App\Models\Patient_spapd_dia::class);
    }
}
