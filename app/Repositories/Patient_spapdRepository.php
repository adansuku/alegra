<?php

namespace App\Repositories;

use App\Models\Patient_spapd;
use App\Repositories\BaseRepository;

/**
 * Class Patient_spapdRepository
 * @package App\Repositories
 * @version July 31, 2019, 1:44 pm UTC
*/

class Patient_spapdRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'prog_spapd',
        'otros_programa',
        'num_sesiones',
        'otras_sesiones',
        'dur_spapd',
        'worker_id'
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
        return Patient_spapd::class;
    }
}
