<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Patient_health
 * @package App\Models
 * @version April 30, 2019, 2:14 pm UTC
 *
 * @property \App\Models\Patient patient
 * @property string reg_sanitario
 * @property string regimen_priv
 * @property string num_afiliado
 * @property string med_cabecera
 * @property string centro_salud
 * @property integer tel_centro_salud
 * @property string med_centro
 * @property string incontinencia
 * @property string caida
 * @property string higiene
 * @property string ulcera
 * @property string deambulacion
 * @property string dieta
 * @property integer patient_id
 */
class Patient_health extends Model
{
    use SoftDeletes;

    public $table = 'patient_healths';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'reg_sanitario',
        'regimen_priv',
        'num_afiliado',
        'med_cabecera',
        'centro_salud',
        'tel_centro_salud',
        'med_centro',
        'incontinencia',
        'incontinencia_opc',
        'caida',
        'riesgo_caida_opc',
        'higiene',
        'higiene_opc',
        'ulcera',
        'deambulacion',
        'dieta',
        'dieta_textura',
        'dieta_observ',
        'hidratacion',
        'hidratacion_observ',
        'patient_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'reg_sanitario' => 'string',
        'regimen_priv' => 'string',
        'num_afiliado' => 'string',
        'med_cabecera' => 'string',
        'centro_salud' => 'string',
        'tel_centro_salud' => 'integer',
        'med_centro' => 'string',
        'incontinencia' => 'string',
        'incontinencia_opc' => 'string',
        'caida' => 'string',
        'riesgo_caida_opc' => 'string',
        'higiene' => 'string',
        'higiene_opc' => 'string',
        'ulcera' => 'string',
        'deambulacion' => 'string',
        'dieta' => 'string',
        'dieta_textura' => 'string',
        'dieta_observ' => 'string',
        'hidratacion' => 'string',
        'hidratacion_observ' => 'string',
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
