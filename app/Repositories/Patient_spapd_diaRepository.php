<?php

namespace App\Repositories;

use App\Models\Patient_spapd_dia;
use App\Repositories\BaseRepository;

/**
 * Class Patient_spapd_diaRepository
 * @package App\Repositories
*/

class Patient_spapd_diaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'dia_spapd',
        'patient_spapd_id'
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
        return Patient_spapd_dia::class;
    }
}
