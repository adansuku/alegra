<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Patient
 * @package App\Models
 * @version April 27, 2019, 3:48 pm UTC
 *
 * @property string numero_expediente
 * @property string foto_paciente
 * @property string fecha_alta_paciente
 * @property string nombre
 * @property string apellido
 * @property string alias
 * @property string genero
 * @property string fecha_nacimiento
 * @property string dni
 * @property string estado_civil
 * @property string direccion
 * @property integer codigo_postal
 * @property string Municipio
 * @property string Isla
 * @property integer telefono
 * @property integer telefono_movil
 * @property string convive_con
 * @property string grado_dependencia
 * @property boolean estado
 * @property string worker_id
 * @property string bloq_piso
 * @property string obs_direcion
 * @property string num_direcion
 * @property string otros_parentesco
 */
class Patient extends Model
{
    use SoftDeletes;

    public $table = 'patients';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'numero_expediente',
        'foto_paciente',
        'fecha_alta_paciente',
        'nombre',
        'apellido',
        'alias',
        'genero',
        'fecha_nacimiento',
        'dni',
        'estado_civil',
        'direccion',
        'codigo_postal',
        'Municipio',
        'Isla',
        'telefono',
        'telefono_movil',
        'convive_con',
        'grado_dependencia',
        'estado',
        'bloq_piso',
        'obs_direcion',
        'num_direcion',
        'otros_parentesco',
        'worker_id',
        'tipo_vivienda'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'numero_expediente' => 'string',
        'foto_paciente' => 'string',
        'fecha_alta_paciente' => 'date',
        'nombre' => 'string',
        'apellido' => 'string',
        'alias' => 'string',
        'genero' => 'string',
        'fecha_nacimiento' => 'date',
        'dni' => 'string',
        'estado_civil' => 'string',
        'direccion' => 'string',
        'codigo_postal' => 'integer',
        'Municipio' => 'string',
        'Isla' => 'string',
        'telefono' => 'integer',
        'telefono_movil' => 'integer',
        'convive_con' => 'array',
        'grado_dependencia' => 'string',
        'estado' => 'boolean',
        'bloq_piso' => 'string',
        'obs_direcion' => 'string',
        'num_direcion' => 'string',
        'otros_parentesco' => 'string',
        'worker_id' => 'array'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'numero_expediente' => 'required',
        'nombre' => 'required',
        'fecha_alta_paciente' => 'required',
        'apellido' => 'required',
        'worker_id' => 'required'
    ];

    public function patientInfo()
    {
        return $this->hasOne(\App\Models\Patient_info::class);
    }

    public function patientOther()
    {
        return $this->hasOne(\App\Models\Patient_other::class);
    }

    public function patientHealth()
    {
        return $this->hasOne(\App\Models\Patient_health::class);
    }

    public function patientDiagnostics()
    {
        return $this->hasMany(\App\Models\Patient_diagnostic::class);
    }

    public function patientPatologies()
    {
        return $this->hasMany(\App\Models\Patient_patology::class);
    }

    public function patientAllergies()
    {
        return $this->hasMany(\App\Models\Patient_allergy::class);
    }

    public function patientCarers()
    {
        return $this->hasMany(\App\Models\Patient_carer::class);
    }

    public function patientHistory()
    {
        return $this->hasMany(\App\Models\Patient_history::class);
    }

    public function patientDocuments()
    {
        return $this->hasMany(\App\Models\Patient_document::class);
    }

    public function patientServices()
    {
        return $this->hasMany(\App\Models\Patient_service::class);
    }

    public function patientPia()
    {
        return $this->hasMany(\App\Models\Patient_pia::class)->orderBy('id', 'ASC');
    }

    public function patientSpapd()
    {
        return $this->hasMany(\App\Models\Patient_spapd::class);
    }

    public function worker()
    {
        return $this->belongsTo(\App\Models\Worker::class);
    }

    public function patientTransport()
    {
        return $this->hasMany(\App\Models\Patient_transport::class);
    }

    public function patientDates()
    {
        return $this->hasMany(\App\Models\Patient_date::class);
    }

    public function patientDoctors()
    {
        return $this->hasMany(\App\Models\Patient_doctor::class);
    }

    public function patientPasts()
    {
        return $this->hasMany(\App\Models\Patient_past::class);
    }

    public function patientMedications()
    {
        return $this->hasMany(\App\Models\Patient_medication::class);
    }
}