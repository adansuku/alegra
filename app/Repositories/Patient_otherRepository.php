<?php

namespace App\Repositories;

use App\Models\Patient_other;
use App\Repositories\BaseRepository;

/**
 * Class Patient_otherRepository
 * @package App\Repositories
 * @version April 30, 2019, 12:56 pm UTC
*/

class Patient_otherRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'cesion_imagen',
        'salir_centro',
        'riesgo_caidas',
        'salida_externa',
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
        return Patient_other::class;
    }
}
