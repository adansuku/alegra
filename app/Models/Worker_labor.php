<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Worker_labor
 * @package App\Models
 * @version April 22, 2019, 4:21 pm UTC
 *
 * @property \App\Models\Workers worker
 * @property string lab_servicio
 * @property string lab_dias
 * @property integer lab_horas
 * @property integer lab_horas_semana
 * @property integer worker_id
 */
class Worker_labor extends Model
{
    use SoftDeletes;

    public $table = 'worker_labors';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'lab_servicio',
        'lab_dias',
        'lab_horas',
        'lab_horas_semana',
        'worker_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'lab_servicio' => 'string',
        'lab_dias' => 'string',
        'lab_horas' => 'integer',
        'lab_horas_semana' => 'integer',
        'worker_id' => 'integer'
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
    public function worker()
    {
        return $this->belongsTo('App\Models\Workers', 'worker_id', 'id');
    }
}
