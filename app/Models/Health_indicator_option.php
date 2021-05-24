<?php

namespace App\Models;
use Eloquent as Model;

/**
 * Class Support_product
 * @package App\Models
 *
 * @property integer id
 * @property string option 
 * @property integer health_indicator_group_id
 */
class Health_indicator_option extends Model
{
    public $table = 'health_indicator_group_options';

    public $fillable = [
        'option',
        'health_indicator_group_id'
    ];

    public function health_indicator_group()
    {
        return $this->belongsTo(\App\Models\Health_indicator_group::class);
    }
}