<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Worker_patient_served
 * @package App\Models
 * @version Octuber 09, 2020, 9:28 am UTC
 *
 * @property integer worker_id
 * @property integer patient_id
 */
class Worker_patient_served extends Model
{
    use SoftDeletes;

    public $table = 'worker_patient_served';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'worker_id',
        'patient_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'worker_id' => 'integer',
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
    public function worker()
    {
        return $this->belongsTo(\App\Models\Worker::class, 'worker_id', 'id');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function patient()
    {
        return $this->belongsTo(\App\Models\Patient::class, 'patient_id', 'id');
    }
}

