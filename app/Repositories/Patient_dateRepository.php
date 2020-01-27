<?php

namespace App\Repositories;

use App\Models\Patient_date;
use App\Repositories\BaseRepository;

/**
 * Class Patient_dateRepository
 * @package App\Repositories
 * @version August 5, 2019, 9:04 pm UTC
*/

class Patient_dateRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'fecha_paciente',
        'desc_fecha_paciente'
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
        return Patient_date::class;
    }
}
