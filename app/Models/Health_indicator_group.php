<?php

namespace App\Models;
use Eloquent as Model;

/**
 * Class Support_product
 * @package App\Models
 *
 * @property integer id
 * @property string description 
 */
class Health_indicator_group extends Model
{
    public $table = 'health_indicator_groups';

    public $fillable = [
        'description'
    ];

    public function healthIndicatorOptions()
    {
        return $this->hasMany(\App\Models\Health_indicator_option::class);
    }
}