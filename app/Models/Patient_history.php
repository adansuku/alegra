<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Patient_history
 * @package App\Models
 * @version May 4, 2019, 9:55 am UTC
 *
 * @property \App\Models\Patient patient
 * @property string acc_fecha_reg
 * @property string acc_fecha_realiz
 * @property string acc_tipo_accion
 * @property string acc_subtipo_accion
 * @property string acc_woker_accion
 * @property string acc_descrip
 * @property string acc_observaciones
 * @property integer patient_id
 */
class Patient_history extends Model
{
    use SoftDeletes;

    public $table = 'patient_histories';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'acc_fecha_reg',
        'acc_fecha_realiz',
        'acc_tipo_accion',
        'acc_subtipo_accion',
        'acc_woker_accion',
        'acc_descrip',
        'acc_observaciones',
        'patient_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'acc_fecha_reg' => 'date',
        'acc_fecha_realiz' => 'date',
        'acc_tipo_accion' => 'string',
        'acc_subtipo_accion' => 'string',
        'acc_woker_accion' => 'string',
        'acc_descrip',
        'acc_observaciones' => 'string',
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
