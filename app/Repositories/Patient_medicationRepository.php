<?php

namespace App\Repositories;

use App\Models\Patient_medication;
use App\Repositories\BaseRepository;

/**
 * Class Patient_medicationRepository
 * @package App\Repositories
 * @version October 21, 2019, 2:50 pm UTC
*/

class Patient_medicationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'medicacion',
        'pauta_medicacion',
        'obs_medicacion'
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
        return Patient_medication::class;
    }
}
