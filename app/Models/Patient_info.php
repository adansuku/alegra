<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Patient_info
 * @package App\Models
 * @version April 27, 2019, 9:29 pm UTC
 *
 * @property \App\Models\Patient patient
 * @property string nivel_educativo
 * @property string estudios_end
 * @property string ocupacion
 * @property string intereses
 * @property string lee_escribe
 * @property string situacion_dep
 * @property string grado_dep
 * @property string nivel_dep
 * @property string ayuda_dep
 * @property string cuantia
 * @property string tec_dependencia
 * @property string guarda_hecho
 * @property string ayuda_soc
 * @property string cert_disc
 * @property string grado_disc
 * @property string fecha_res_disc
 * @property string tipo_disc
 * @property string sit_legal
 * @property integer patient_id
 * @property string miem_familia
 * @property integer hijos
 * @property string vivienda
 * @property string vivienda_otros
 * @property string ingresos_proced
 * @property float ingresos_m
 * @property float otros_ingresos
 *
 */
class Patient_info extends Model
{
    use SoftDeletes;

    public $table = 'patient_infos';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nivel_educativo',
        'estudios_end',
        'ocupacion',
        'intereses',
        'lee_escribe',
        'situacion_dep',
        'grado_dep',
        'grado_rev',
        'nivel_dep',
        'ayuda_dep',
        'tec_dependencia',
        'guarda_hecho',
        'ayuda_soc',
        'cert_disc',
        'grado_disc',
        'fecha_res_disc',
        'tipo_disc',
        'sit_legal',
        'miem_familia',
        'hijos',
        'vivienda',
        'vivienda_otros',
        'ingresos_m',
        'ingresos_proced',
        'cuantia',
        'otros_ingresos',
        'patient_id',
        'diagnostico_social',
        'rs_grado',
        'rs_revision',
        'rs_reclamacion',
        'rs_tipo_ayuda',
        'rs_otros',
        'rs_ultimo_tramite',
        'rs_fecha_registro',
        'rs_proximo_tramite',
        'reclamacion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nivel_educativo' => 'string',
        'estudios_end' => 'string',
        'ocupacion' => 'string',
        'intereses' => 'string',
        'lee_escribe' => 'string',
        'situacion_dep' => 'string',
        'grado_dep' => 'string',
        'grado_rev' => 'string',
        'nivel_dep' => 'string',
        'ayuda_dep' => 'string',
        'cuantia' => 'string',
        'tec_dependencia' => 'string',
        'guarda_hecho' => 'string',
        'ayuda_soc' => 'array',
        'cert_disc' => 'string',
        'grado_disc' => 'string',
        'fecha_res_disc' => 'date',
        'tipo_disc' => 'array',
        'sit_legal' => 'string',
        'miem_familia' => 'string',
        'hijos' => 'integer',
        'vivienda' => 'string',
        'vivienda_otros' => 'string',
        'ingresos_m' => 'float',
        'ingresos_proced' => 'string',
        'otros_ingresos' => 'string',
        'patient_id' => 'integer',
        'diagnostico_social' => 'string',
        'rs_grado'=> 'string',
        'rs_revision'=> 'string',
        'rs_reclamacion'=> 'string',
        'rs_tipo_ayuda'=> 'array',
        'rs_otros'=> 'string',
        'rs_ultimo_tramite'=> 'array',
        'rs_fecha_registro'=> 'string',
        'rs_proximo_tramite'=> 'array',
        'reclamacion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function patient()
    {
        return $this->belongsTo(App\Models\Patient::class);
    }
}
