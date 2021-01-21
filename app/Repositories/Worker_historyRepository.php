<?php

namespace App\Repositories;

use App\Models\Worker_history;
use App\Repositories\BaseRepository;

/**
 * Class Worker_historyRepository
 * @package App\Repositories
 * @version April 22, 2019, 4:51 pm UTC
*/

class Worker_historyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'his_categoria',
        'his_tipo',
        'his_respuesta',
        'his_observaciones'
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
        return Worker_history::class;
    }
}
