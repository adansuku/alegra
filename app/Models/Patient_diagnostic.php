<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Patient_diagnostic
 * @package App\Models
 * @version April 28, 2019, 8:46 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection patients
 * @property string diagnostico
 * @property integer patient_id
 */
class Patient_diagnostic extends Model
{
    use SoftDeletes;

    public $table = 'patient_diagnostics';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'diagnostico',
        'diagnos_concreto',
        'patient_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'diagnostico' => 'string',
        'diagnos_concreto' => 'array',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/

    public function patient()
    {
        return $this->belongsTo(App\Models\Patient::class);
    }
}
