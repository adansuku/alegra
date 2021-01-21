<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Patient_patology
 * @package App\Models
 * @version April 28, 2019, 9:12 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection patients
 * @property string nombre_pat
 * @property string patologia
 * @property integer patient_id
 */
class Patient_patology extends Model
{
    use SoftDeletes;

    public $table = 'patient_patologies';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre_pat',
        'patologia',
        'patient_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre_pat' => 'string',
        'patologia' => 'array',
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
