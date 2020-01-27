<?php

namespace App\Repositories;

use App\Models\Worker_time;
use App\Repositories\BaseRepository;

/**
 * Class Worker_timeRepository
 * @package App\Repositories
 * @version December 3, 2019, 9:28 am UTC
*/

class Worker_timeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'fecha_entrada',
        'fecha_salida',
        'latitud',
        'longitud',
        'dirección',
        'observaciones'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Worker_time::class;
    }
}
