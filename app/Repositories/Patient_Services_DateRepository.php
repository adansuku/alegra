<?php

namespace App\Repositories;

use App\Models\Patient_Services_Date;
use App\Repositories\BaseRepository;

/**
 * Class Patient_Services_DateRepository
 * @package App\Repositories
 * @version October 21, 2019, 7:03 pm UTC
*/

class Patient_Services_DateRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'dia_servicio',
        'horario_servicio',
        'obs_servicio'
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
        return Patient_Services_Date::class;
    }
}
