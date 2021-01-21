<?php

namespace App\Repositories;

use App\Models\Patient_document;
use App\Repositories\BaseRepository;

/**
 * Class Patient_documentRepository
 * @package App\Repositories
 * @version May 4, 2019, 10:07 am UTC
*/

class Patient_documentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'cat_documentos',
        'nombre_doc',
        'url'
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
        return Patient_document::class;
    }
}
