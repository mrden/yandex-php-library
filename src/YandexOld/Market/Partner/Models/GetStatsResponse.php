<?php

namespace YandexOld\Market\Partner\Models;

use YandexOld\Common\Model;

class GetStatsResponse extends Model
{
    protected $mainStats = null;

    protected $mappingClasses = [
        'mainStats' => 'Yandex\Market\Partner\Models\Stats'
    ];

    protected $propNameMap = [];

    /**
     * @return null
     */
    public function getMainStats()
    {
        return $this->mainStats;
    }
}
