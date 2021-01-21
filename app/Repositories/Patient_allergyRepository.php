<?php

namespace App\Repositories;

use App\Models\Patient_allergy;
use App\Repositories\BaseRepository;

/**
 * Class Patient_allergyRepository
 * @package App\Repositories
 * @version April 28, 2019, 9:22 am UTC
*/

class Patient_allergyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'nombre_alergia',
        'alergia',
        'tratamiento'
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
        return Patient_allergy::class;
    }
}
