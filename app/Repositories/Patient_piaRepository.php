<?php

namespace App\Repositories;

use App\Models\Patient_pia;
use App\Repositories\BaseRepository;

/**
 * Class Patient_piaRepository
 * @package App\Repositories
 * @version July 9, 2019, 12:31 am UTC
*/

class Patient_piaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'fecha_limite',
        'fecha_real',
        'tipo_pia',
        'url_pia',
        'obs_pia'
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
        return Patient_pia::class;
    }
}
