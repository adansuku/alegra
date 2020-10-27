<?php

namespace App\Repositories;

use App\Models\Worker_session;
use App\Repositories\BaseRepository;

/**
 * Class Worker_timeRepository
 * @package App\Repositories
 * @version January 31, 2010
*/

class Worker_sessionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'latitud',
        'longitud',
        'dirección',
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
        return Worker_session::class;
    }
}
