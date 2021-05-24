<?php

namespace App\Repositories;

use App\Models\Patient_centro;
use App\Repositories\BaseRepository;

/**
 * Class Patient_centroRepository
 * @package App\Repositories
*/

class Patient_centroRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'prog_centro',
        'num_sesiones',
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
        return Patient_centro::class;
    }
}
