<?php

namespace App\Repositories;

use App\Models\Patient;
use App\Repositories\BaseRepository;

/**
 * Class PatientRepository
 * @package App\Repositories
 * @version April 27, 2019, 3:48 pm UTC
*/

class PatientRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'numero_expediente',
        'foto_paciente',
        'fecha_alta_paciente',
        'nombre',
        'apellido',
        'alias',
        'genero',
        'fecha_nacimiento',
        'dni',
        'estado_civil',
        'direccion',
        'codigo_postal',
        'Municipio',
        'Isla',
        'telefono',
        'telefono_movil',
        'convive_con',
        'grado_dependencia'
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
        return Patient::class;
    }
}
