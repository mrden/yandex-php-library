<?php

namespace YandexOld\Market\Content\Models;

use YandexOld\Market\Content\Models\Base\PagedModel;

class ResponseModelOpinionsGet extends PagedModel
{
    protected $mappingClasses = [
        'items' => 'Yandex\Market\Content\Models\ModelOpinions'
    ];

    protected $propNameMap = [
        'opinion' => 'items'
    ];

    /**
     * Constructor
     *
     * @param array $data
     */
    public function __construct($data = array())
    {
        parent::__construct($data['modelOpinions']);
    }
}
