<?php

namespace App\Repositories;

use App\Models\Patient_diagnostic;
use App\Repositories\BaseRepository;

/**
 * Class Patient_diagnosticRepository
 * @package App\Repositories
 * @version April 28, 2019, 8:46 am UTC
*/

class Patient_diagnosticRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'nombre_diagnostico',
        'diagnostico'
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
        return Patient_diagnostic::class;
    }
}
