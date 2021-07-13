<?php

namespace YandexOld\Market\Content\Models;

use YandexOld\Common\Model;

class ResponseGeoRegionGet extends Model
{
    protected $geoRegion = null;

    protected $mappingClasses = [
        'geoRegion' => 'YandexOld\Market\Content\Models\GeoRegion'
    ];

    protected $propNameMap = [
        'georegion' => 'geoRegion'
    ];

    /**
     * Retrieve the geoRegion property
     *
     * @return GeoRegion|null
     */
    public function getGeoRegion()
    {
        return $this->geoRegion;
    }
}
