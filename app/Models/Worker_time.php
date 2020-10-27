<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Worker_time
 * @package App\Models
 * @version December 3, 2019, 9:28 am UTC
 *
 * @property \App\Models\Workers worker
 * @property string fecha_entrada
 * @property string fecha_salida
 * @property string latitud
 * @property string longitud
 * @property string dirección
 * @property string observaciones
 * @property integer worker_id
 */
class Worker_time extends Model
{
    use SoftDeletes;

    public $table = 'worker_times';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'fecha_entrada',
        'fecha_salida',
        'latitud',
        'longitud',
        'dirección',
        'observaciones',
        'worker_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fecha_entrada' => 'date',
        'fecha_salida' => 'string',
        'latitud' => 'string',
        'longitud' => 'string',
        'dirección' => 'string',
        'observaciones' => 'string',
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
        return $this->belongsTo(\App\Models\Workers::class, 'worker_id', 'id');
    }
}
