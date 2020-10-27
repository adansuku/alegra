<?php

namespace App\Repositories;

use App\Models\Worker;
use App\Repositories\BaseRepository;

/**
 * Class WorkerRepository
 * @package App\Repositories
 * @version April 19, 2019, 6:48 pm UTC
*/

class WorkerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'dni',
        'direccion',
        'telefono',
        'telefono_movil',
        'email',
        'cat_profesional',
        'titulacion',
        'centro_acufade',
        'titulacion_curso',
        'tutor_academico',
        'tutor_telefono',
        'tutor_email',
        'persona_ref_Acufade',
        'alergias',
        'otras_alergias',
        'urg_nom_ape',
        'urg_parentesco',
        'urg_telefono',
        'fecha_alta',
        'fecha_baja',
        'email_corporativo',
        'numero_horas'
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
        return Worker::class;
    }
}
