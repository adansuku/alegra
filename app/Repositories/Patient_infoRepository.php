<?php

namespace App\Repositories;

use App\Models\Patient_info;
use App\Repositories\BaseRepository;

/**
 * Class Patient_infoRepository
 * @package App\Repositories
 * @version April 27, 2019, 9:29 pm UTC
*/

class Patient_infoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'nivel_educativo',
        'estudios_end',
        'ocupacion',
        'intereses',
        'lee_escribe',
        'situacion_dep',
        'grado_dep',
        'grado_rev',
        'nivel_dep',
        'ayuda_dep',
        'tec_dependencia',
        'guarda_hecho',
        'ayuda_soc',
        'cert_disc',
        'grado_disc',
        'fecha_res_disc',
        'tipo_disc',
        'sit_legal',
        'miem_familia',
        'hijos',
        'vivienda',
        'vivienda_otros',
        'ingresos_m',
        'ingresos_proced',
        'cuantia',
        'patient_id'
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
        return Patient_info::class;
    }
}
