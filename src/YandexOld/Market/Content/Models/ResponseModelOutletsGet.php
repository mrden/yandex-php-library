<?php

namespace YandexOld\Market\Content\Models;

use YandexOld\Market\Content\Models\Base\PagedModel;

class ResponseModelOutletsGet extends PagedModel
{
    protected $mappingClasses = [
        'items' => 'YandexOld\Market\Content\Models\Outlets'
    ];

    protected $propNameMap = [
        'outlet' => 'items'
    ];

    /**
     * Constructor
     *
     * @param array $data
     */
    public function __construct($data = array())
    {
        parent::__construct($data['outlets']);
    }
}
