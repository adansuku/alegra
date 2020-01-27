<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
/**
 * Class Worker
 * @package App\Models
 * @version April 19, 2019, 6:48 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection workerDocuments
 * @property string nombre
 * @property string apellido
 * @property string fecha_nacimiento
 * @property string dni
 * @property string direccion
 * @property integer telefono
 * @property integer telefono_movil
 * @property string email
 * @property string cat_profesional
 * @property string titulacion
 * @property string centro_acufade
 * @property string titulacion_curso
 * @property string tutor_academico
 * @property integer tutor_telefono
 * @property string tutor_email
 * @property string persona_ref_Acufade
 * @property string cesion_imagen
 * @property string alergias
 * @property string otras_alergias
 * @property string urg_nom_ape
 * @property string urg_parentesco
 * @property string urg_telefono
 * @property string fecha_alta
 * @property string fecha_baja
 * @property string email_corporativo
 * @property integer numero_horas
 */
class Worker extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;

    protected $table = 'workers';
    protected $dates = ['deleted_at'];


    protected $fillable = [
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'dni',
        'direccion',
        'telefono',
        'telefono_movil',
        'email',
        'cat_profesional',
        'titulacion',
        'centro_acufade',
        'titulacion_curso',
        'tutor_academico',
        'tutor_telefono',
        'tutor_email',
        'persona_ref_Acufade',
        'cesion_imagen',
        'alergias',
        'otras_alergias',
        'urg_nom_ape',
        'urg_parentesco',
        'urg_telefono',
        'fecha_alta',
        'fecha_baja',
        'email_personal',
        'numero_horas',
        'avatar',
        'password'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];

    public function getAuthPassword()
    {
      return $this->password;
    }

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'apellido' => 'string',
        'fecha_nacimiento' => 'date',
        'dni' => 'string',
        'direccion' => 'string',
        'telefono' => 'integer',
        'telefono_movil' => 'integer',
        'email' => 'string',
        'cat_profesional' => 'string',
        'titulacion' => 'string',
        'centro_acufade' => 'string',
        'titulacion_curso' => 'string',
        'tutor_academico' => 'string',
        'tutor_telefono' => 'integer',
        'tutor_email' => 'string',
        'persona_ref_Acufade' => 'string',
        'cesion_imagen' => 'string',
        'alergias' => 'string',
        'otras_alergias' => 'string',
        'urg_nom_ape' => 'string',
        'urg_parentesco' => 'string',
        'urg_telefono' => 'string',
        'fecha_alta' => 'date',
        'fecha_baja' => 'date',
        'email_personal' => 'string',
        'numero_horas' => 'integer',
        'avatar' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        // 'nombre' => 'required',
        // 'apellido' => 'required',
        // 'password' => 'required',
        // 'password' => 'confirmed',
        // 'email' => 'required',
        // 'email' => 'unique:workers',
        // 'password_confirmation' => 'required'

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function workerDocuments()
    {
        return $this->hasMany('App\Models\Worker_document');
    }

    public function workerLabors()
    {
        return $this->hasMany('App\Models\Worker_labor');
    }

    public function workerHistories()
    {
        return $this->hasMany('App\Models\Worker_history');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function spapds()
    {
        return $this->hasMany(\App\Models\Spapd::class, 'worker_id');
    }

    public function patients()
    {
        return $this->hasMany(\App\Models\Patient::class);
    }
}
