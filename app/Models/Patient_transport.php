<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Patient_transport
 * @package App\Models
 * @version July 31, 2019, 3:39 pm UTC
 *
 * @property \App\Models\Patient patient
 * @property string dia_trans
 * @property string dom_recogida
 * @property string tray_trans
 * @property integer patient_id
 */
class Patient_transport extends Model
{
    use SoftDeletes;

    public $table = 'patient_transports';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'dia_trans',
        'dom_recogida',
        'tray_trans',
        'patient_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'dia_trans' => 'string',
        'dom_recogida' => 'string',
        'tray_trans' => 'string',
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
