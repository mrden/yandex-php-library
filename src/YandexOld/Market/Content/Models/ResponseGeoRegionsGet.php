<?php

namespace YandexOld\Market\Content\Models;

use YandexOld\Market\Content\Models\Base\PagedModel;

class ResponseGeoRegionsGet extends PagedModel
{
    protected $mappingClasses = [
        'items' => 'YandexOld\Market\Content\Models\GeoRegions'
    ];

    /**
     * Constructor
     *
     * @param array $data
     */
    public function __construct($data = array())
    {
        parent::__construct($data['georegions']);
    }
}
