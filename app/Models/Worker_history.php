<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Worker_history
 * @package App\Models
 * @version April 22, 2019, 4:51 pm UTC
 *
 * @property \App\Models\Workers worker
 * @property string his_categoria
 * @property string his_tipo
 * @property string his_respuesta
 * @property string his_observaciones
 * @property integer worker_id
 */
class Worker_history extends Model
{
    use SoftDeletes;

    public $table = 'worker_histories';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'his_categoria',
        'his_tipo',
        'his_respuesta',
        'his_observaciones',
        'worker_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'his_categoria' => 'string',
        'his_tipo' => 'string',
        'his_observaciones' => 'string',
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
