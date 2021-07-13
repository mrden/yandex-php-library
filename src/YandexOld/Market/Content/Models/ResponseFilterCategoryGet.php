<?php

namespace YandexOld\Market\Content\Models;

use YandexOld\Market\Content\Models\Base\PagedModel;

class ResponseFilterCategoryGet extends PagedModel
{
    protected $regionDelimiterPosition = null;

    protected $mappingClasses = [
        'items' => 'YandexOld\Market\Content\Models\SearchResults'
    ];

    protected $propNameMap = [
        'results' => 'items'
    ];

    /**
     * Constructor
     *
     * @param array $data
     */
    public function __construct($data = array())
    {
        parent::__construct($data['searchResult']);
    }

    /**
     * Retrieve the regionDelimiterPosition property
     *
     * @return int|null
     */
    public function getRegionDelimiterPosition()
    {
        return $this->regionDelimiterPosition;
    }
}
