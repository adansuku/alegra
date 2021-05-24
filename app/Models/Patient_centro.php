<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Patient_centro
 * @package App\Models
 *
 * @property \App\Models\Patient centro
 * @property string prog_centro
 * @property integer num_sesiones
 * @property string worker_id
 * @property integer patient_id
 */
class Patient_centro extends Model
{
    use SoftDeletes;

    public $table = 'patient_centros';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'prog_centro',
        'num_sesiones',
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
        'prog_centro' => 'string',
        'num_sesiones' => 'float',
        'worker_id' => 'string',
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

    public function patient_centro_dias()
    {
        return $this->hasMany(\App\Models\Patient_centro_dia::class);
    }

    
}
