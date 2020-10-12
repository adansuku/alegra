<?php

namespace App\Repositories;

use App\Models\Worker_labor;
use App\Repositories\BaseRepository;

/**
 * Class Worker_laborRepository
 * @package App\Repositories
 * @version April 22, 2019, 4:21 pm UTC
*/

class Worker_laborRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'lab_servicio',
        'lab_dias',
        'lab_horas',
        'lab_horas_semana'
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
        return Worker_labor::class;
    }
}
