<?php

namespace App\Repositories;

use App\Models\Patient_transport;
use App\Repositories\BaseRepository;

/**
 * Class Patient_transportRepository
 * @package App\Repositories
 * @version July 31, 2019, 3:39 pm UTC
*/

class Patient_transportRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'dia_trans',
        'dom_recogida',
        'tray_trans'
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
        return Patient_transport::class;
    }
}
