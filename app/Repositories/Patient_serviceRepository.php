<?php

namespace App\Repositories;

use App\Models\Patient_service;
use App\Repositories\BaseRepository;

/**
 * Class Patient_serviceRepository
 * @package App\Repositories
 * @version October 21, 2019, 6:52 am UTC
*/

class Patient_serviceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'nom_servicio',
        'municipio_serv',
        'tipo_plaza_serv',
        'plaza_privada_serv',
        'plaza_sub_serv',
        'fecha_form_serv'
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
        return Patient_service::class;
    }
}
