<?php

namespace YandexOld\Market\Partner\Models;

use YandexOld\Common\Model;

class GetRegionResponse extends Model
{
    protected $region = null;

    protected $mappingClasses = [
        'region' => 'Yandex\Market\Partner\Models\Region'
    ];

    protected $propNameMap = [];

    /**
     * @return null
     */
    public function getRegion()
    {
        return $this->region;
    }
}
