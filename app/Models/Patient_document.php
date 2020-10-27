<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Patient_document
 * @package App\Models
 * @version May 4, 2019, 10:07 am UTC
 *
 * @property \App\Models\Patient patient
 * @property string cat_documentos
 * @property string nombre_doc
 * @property string url
 * @property string fecha_documento
 * @property integer patient_id
 */
class Patient_document extends Model
{
    use SoftDeletes;

    public $table = 'patient_documents';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'cat_documentos',
        'nombre_doc',
        'url',
        'fecha_documento',
        'patient_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cat_documentos' => 'string',
        'nombre_doc' => 'string',
        'fecha_documento' => 'date',
        'url' => 'string',
        'patient_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'url' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function patient()
    {
        return $this->belongsTo(\App\Models\Patient::class);
    }
}
