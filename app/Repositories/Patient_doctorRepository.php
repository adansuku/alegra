<?php

namespace App\Repositories;

use App\Models\Patient_doctor;
use App\Repositories\BaseRepository;

/**
 * Class Patient_doctorRepository
 * @package App\Repositories
 * @version August 5, 2019, 9:28 pm UTC
*/

class Patient_doctorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'nombre_doctor',
        'observaciones_doctor'
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
        return Patient_doctor::class;
    }
}
