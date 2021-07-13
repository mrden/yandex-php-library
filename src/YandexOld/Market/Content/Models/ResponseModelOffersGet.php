<?php

namespace YandexOld\Market\Content\Models;

use YandexOld\Market\Content\Models\Base\PagedModel;

class ResponseModelOffersGet extends PagedModel
{
    protected $regionDelimiterPosition = null;

    protected $filters = null;

    protected $metadata = null;

    /**
     * Constructor
     *
     * @param array $data
     */
    public function __construct($data = array())
    {
        parent::__construct($data['offers']);
    }

    protected $mappingClasses = [
        'items' => 'YandexOld\Market\Content\Models\Offers',
        'filters' => 'YandexOld\Market\Content\Models\Filters'
    ];

    /**
     * Retrieve the $regionDelimiterPosition property
     *
     * @return int|null
     */
    public function getRegionDelimiterPosition()
    {
        return $this->regionDelimiterPosition;
    }

    /**
     * Retrieve the metadata property
     *
     * @return Offers|null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }
}
