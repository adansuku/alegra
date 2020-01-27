<?php

namespace App\Repositories;

use App\Models\Worker_document;
use App\Repositories\BaseRepository;

/**
 * Class Worker_documentRepository
 * @package App\Repositories
 * @version April 19, 2019, 6:49 pm UTC
*/

class Worker_documentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'cat_documentos',
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
        return Worker_document::class;
    }
}
