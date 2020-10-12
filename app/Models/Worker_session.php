<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Worker_time
 * @package App\Models
 * @version January 31, 2020
 *
 * @property \App\Models\Workers worker
 * @property string latitud
 * @property string longitud
 * @property string dirección
 * @property integer worker_id
 */
class Worker_session extends Model
{
    use SoftDeletes;

    public $table = 'worker_sessions';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'action',
        'latitud',
        'longitud',
        'direccion',
        'worker_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'latitud' => 'string',
        'longitud' => 'string',
        'dirección' => 'string',
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
