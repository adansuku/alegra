<?php

namespace App\Repositories;

use App\Models\Patient_past;
use App\Repositories\BaseRepository;

/**
 * Class Patient_pastRepository
 * @package App\Repositories
 * @version October 21, 2019, 12:18 pm UTC
*/

class Patient_pastRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'antecedentes',
        'antecedentes_obs',
        'antecedentes_anio'
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
        return Patient_past::class;
    }
}
