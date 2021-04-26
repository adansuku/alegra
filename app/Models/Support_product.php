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
class Support_product extends Model
{
    public $table = 'support_products';

    public $fillable = [
        'description'
    ];
}