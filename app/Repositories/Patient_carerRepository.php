<?php

namespace App\Repositories;

use App\Models\Patient_carer;
use App\Repositories\BaseRepository;

/**
 * Class Patient_carerRepository
 * @package App\Repositories
 * @version July 10, 2019, 10:29 pm UTC
*/

class Patient_carerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'nombre',
        'apellido',
        'parentesco',
        'dni',
        'fecha_nac_care',
        'direccion_care',
        'tel_care',
        'movil_care',
        'email_care',
        'whatsapp',
        'sit_laboral',
        'trabajo_care',
        'ano_care',
        'sit_apoyo',
        'cesion_care',
        'contactar_para',
        'es_referencia',
        'cuidadora_principal',
        'proyecto_social'
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
        return Patient_carer::class;
    }
}
