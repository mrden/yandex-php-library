<?php

namespace YandexOld\Market\Partner\Models;

use YandexOld\Market\Partner\Models\Campaigns;
use YandexOld\Common\Model;

class GetCampaignsResponse extends Model
{

    protected $campaigns = null;

    protected $mappingClasses = [
        'campaigns' => 'Yandex\Market\Partner\Models\Campaigns'
    ];

    protected $propNameMap = [];

    /**
     * Retrieve the campaigns property
     *
     * @return Campaigns|null
     */
    public function getCampaigns()
    {
        return $this->campaigns;
    }
}
