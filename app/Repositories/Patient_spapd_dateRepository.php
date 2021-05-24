<?php

namespace App\Repositories;

use App\Models\Patient_spapd_date;
use App\Repositories\BaseRepository;

/**
 * Class Patient_spapd_dateRepository
 * @package App\Repositories
*/

class Patient_spapd_dateRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
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
        return Patient_spapd_date::class;
    }
}
