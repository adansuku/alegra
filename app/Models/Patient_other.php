<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Patient_other
 * @package App\Models
 * @version April 30, 2019, 12:56 pm UTC
 *
 * @property \App\Models\Patient patient
 * @property string fecha_trans
 * @property string transporte
 * @property string cesion_imagen
 * @property string salir_centro
 * @property string riesgo_caidas
 * @property string salida_externa
 * @property string socio
 * @property string no_socio
 * @property string forma_pago
 * @property integer patient_id
 * @property string dire_transp
 * @property integer importe_serv
 * @property integer importe_trans
 * @property string cuota_socio
 * @property string  periodicidad',
 * @property string  pago_socio,
 * @property string dire_transporte,
 * @property string  patient_id
 */
class Patient_other extends Model
{
    use SoftDeletes;

    public $table = 'patient_others';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'fecha_trans',
        'transporte',
        'cesion_imagen',
        'salir_centro',
        'riesgo_caidas',
        'salida_externa',
        'socio',
        'no_socio',
        'forma_pago',
        'dire_transp',
        'importe_serv',
        'importe_trans',
        'cuota_socio',
        'periodicidad',
        'pago_socio',
        'dire_transporte',
        'patient_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fecha_trans' => 'date',
        'transporte' => 'string',
        'cesion_imagen' => 'string',
        'salir_centro' => 'string',
        'riesgo_caidas' => 'string',
        'salida_externa' => 'string',
        'socio' => 'string',
        'no_socio' => 'string',
        'forma_pago' => 'string',
        'dire_transp' => 'string',
        'importe_serv' => 'integer',
        'importe_trans' => 'integer',
        'cuota_socio' => 'string',
        'periodicidad' => 'string',
        'pago_socio' => 'string',
        'dire_transporte' => 'string',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function patient()
    {
        return $this->hasOne(\App\Models\Patient::class);
    }
}
