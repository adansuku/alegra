<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Patient_service
 * @package App\Models
 * @version October 21, 2019, 6:52 am UTC
 *
 * @property \App\Models\Patient patient
 * @property string nom_servicio
 * @property string municipio_serv
 * @property string tipo_plaza_serv
 * @property string plaza_privada_serv
 * @property string plaza_sub_serv
 * @property string fecha_form_serv
 * @property integer patient_id
 */
class Patient_service extends Model
{
    use SoftDeletes;

    public $table = 'patient_services';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nom_servicio',
        'municipio_serv',
        'tipo_plaza_serv',
        'plaza_privada_serv',
        'plaza_sub_serv',
        'fecha_form_serv',
        'patient_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nom_servicio' => 'string',
        'municipio_serv' => 'string',
        'tipo_plaza_serv' => 'array',
        'plaza_privada_serv' => 'array',
        'plaza_sub_serv' => 'string',
        'fecha_form_serv' => 'date',
        'patient_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


    public function patient()
    {
        return $this->belongsTo(\App\Models\Patient::class);
    }

    public function serviceDates()
    {
        return $this->hasMany(\App\Models\Patient_Services_Date::class);
    }


}
