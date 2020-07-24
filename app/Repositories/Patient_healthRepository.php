<?php

namespace App\Repositories;

use App\Models\Patient_health;
use App\Repositories\BaseRepository;

/**
 * Class Patient_healthRepository
 * @package App\Repositories
 * @version April 30, 2019, 2:14 pm UTC
*/

class Patient_healthRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'reg_sanitario',
        'regimen_priv',
        'num_afiliado',
        'med_cabecera',
        'centro_salud',
        'tel_centro_salud',
        'med_centro',
        'incontinencia',
        'caida',
        'higiene',
        'ulcera',
        'deambulacion'
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
        return Patient_health::class;
    }
}
