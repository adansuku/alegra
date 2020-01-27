<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Worker_document
 * @package App\Models
 * @version April 19, 2019, 6:49 pm UTC
 *
 * @property \App\Models\Workers worker
 * @property string cat_documentos
 * @property string url
 * @property integer worker_id
 */
class Worker_document extends Model
{
    use SoftDeletes;

    public $table = 'worker_documents';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'cat_documentos',
        'url',
        'worker_id',
        'nombre_documento'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cat_documentos' => 'string',
        'url' => 'string',
        'worker_id' => 'integer',
        'nombre_documento' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'url' => 'required',
        'nombre_documento' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function worker()
    {
        return $this->belongsTo('App\Models\Workers', 'worker_id', 'id');
    }
}
