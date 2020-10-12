<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Patient_carer
 * @package App\Models
 * @version July 10, 2019, 10:29 pm UTC
 *
 * @property \App\Models\Patient patient
 * @property string nombre
 * @property string apellido
 * @property string parentesco
 * @property string dni
 * @property string fecha_nac_care
 * @property string direccion_care
 * @property integer tel_care
 * @property integer movil_care
 * @property string email_care
 * @property string whatsapp
 * @property string sit_laboral
 * @property string trabajo_care
 * @property string ano_care
 * @property string sit_apoyo
 * @property string cesion_care
 * @property string contactar_para
 * @property string es_referencia
 * @property string es_tutor
 * @property string genero_carer
 * @property string municipio_carer
 * @property string estudios_carer
 * @property string otro_paren
 * @property string otro_ocupacion
 * @property string otro_trabajo
 * @property string otro_serv_apoyo
 * @property string otro_contactar_para
 * @property integer patient_id
 */
class Patient_carer extends Model
{
    use SoftDeletes;

    public $table = 'patient_carers';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'apellido',
        'parentesco',
        'dni',
        'fecha_nac_care',
        'direccion_care',
        'tel_care',
        'movil_care',
        'email_care',
        'whatsapp',
        'sit_laboral',
        'trabajo_care',
        'ano_care',
        'sit_apoyo',
        'cesion_care',
        'contactar_para',
        'es_referencia',
        'es_tutor',
        'genero_carer',
        'municipio_carer',
        'estudios_carer',
        'otro_paren',
        'otro_ocupacion',
        'otro_trabajo',
        'otro_serv_apoyo',
        'otro_contactar_para',
        'patient_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'apellido' => 'string',
        'parentesco' => 'string',
        'dni' => 'string',
        'fecha_nac_care' => 'date',
        'direccion_care' => 'string',
        'tel_care' => 'integer',
        'movil_care' => 'integer',
        'email_care' => 'string',
        'whatsapp' => 'string',
        'sit_laboral' => 'string',
        'trabajo_care' => 'array',
        'ano_care' => 'string',
        'sit_apoyo' => 'array',
        'cesion_care' => 'string',
        'contactar_para' => 'array',
        'es_referencia' => 'string',
        'es_tutor' => 'string',
        'genero_carer' => 'string',
        'municipio_carer' => 'string',
        'estudios_carer' => 'string',
        'otro_paren' => 'string',
        'otro_ocupacion' => 'string',
        'otro_trabajo' => 'string',
        'otro_serv_apoyo' => 'string',
        'otro_contactar_para' => 'string',
        'patient_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function patient()
    {
        return $this->belongsTo(\App\Models\Patient::class);
    }
}
