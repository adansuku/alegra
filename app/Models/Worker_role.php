<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Worker_roles
 * @package App\Models
 * @version Octuber 09, 2020, 9:28 am UTC
 *
 * @property integer id
 * @property string role 
 */
class Worker_role extends Model
{
    public $table = 'worker_roles';
    
    

    public $fillable = [
        'role'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'role' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

}

