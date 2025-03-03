<?php

namespace YandexOld\Metrica\Management\Models;

use YandexOld\Metrica\Management\Models\Filter;
use YandexOld\Common\Model;

class GetFilterResponse extends Model
{

    protected $filter = null;

    protected $mappingClasses = [
        'filter' => 'YandexOld\Metrica\Management\Models\Filter'
    ];

    protected $propNameMap = [];

    /**
     * Retrieve the filter property
     *
     * @return Filter|null
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Set the filter property
     *
     * @param Filter $filter
     * @return $this
     */
    public function setFilter($filter)
    {
        $this->filter = $filter;
        return $this;
    }
}
