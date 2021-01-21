<?php

namespace App\Repositories;

use App\Models\Patient_patology;
use App\Repositories\BaseRepository;

/**
 * Class Patient_patologyRepository
 * @package App\Repositories
 * @version April 28, 2019, 9:12 am UTC
*/

class Patient_patologyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'nombre_pat',
        'patologia'
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
        return Patient_patology::class;
    }
}
