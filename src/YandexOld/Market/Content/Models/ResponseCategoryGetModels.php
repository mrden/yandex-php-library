<?php

namespace YandexOld\Market\Content\Models;

use YandexOld\Market\Content\Models\Base\PagedModel;

class ResponseCategoryGetModels extends PagedModel
{
    protected $mappingClasses = [
        'items' => 'YandexOld\Market\Content\Models\Base\Models'
    ];

    /**
     * Constructor
     *
     * @param array $data
     */
    public function __construct($data = array())
    {
        parent::__construct($data['models']);
    }
}
