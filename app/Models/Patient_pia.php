<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Patient_pia
 * @package App\Models
 * @version July 9, 2019, 12:31 am UTC
 *
 * @property \App\Models\Patient patient
 * @property string fecha_limite
 * @property string fecha_real
 * @property string tipo_pia
 * @property string url_pia
 * @property string obs_pia
 * @property string fecha_real_entrega
 * @property string exito_pia
 * @property string url_recepcion  
 * @property integer patient_id
 */
class Patient_pia extends Model
{
    use SoftDeletes;

    public $table = 'patient_pias';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'fecha_limite',
        'tipo_pia',
        'patient_id',
        'url_pia',
        'fecha_real_entrega',
        'exito_pia',
        'url_recepcion',
        'obs_pia'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fecha_limite' => 'date',
        'fecha_real' => 'date',
        'tipo_pia' => 'string',
        'url_pia' => 'string',
        'fecha_real_entrega' => 'string',
        'exito_pia' => 'string',
        'url_recepcion' => 'string',
        'obs_pia' => 'string',
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
