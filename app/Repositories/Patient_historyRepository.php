<?php

namespace App\Repositories;

use App\Models\Patient_history;
use App\Repositories\BaseRepository;

/**
 * Class Patient_historyRepository
 * @package App\Repositories
 * @version May 4, 2019, 9:55 am UTC
*/

class Patient_historyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'accion',
        'tipo_accion',
        'des_accion',
        'reg_accion',
        'rea_accion',
        'woker_accion',
        'observaciones'
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
        return Patient_history::class;
    }
}
