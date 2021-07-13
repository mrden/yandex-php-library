<?php

namespace YandexOld\Market\Content\Models;

use YandexOld\Common\Model;

class ResponseOfferGet extends Model
{
    protected $offer = null;

    protected $mappingClasses = [
        'offer' => 'YandexOld\Market\Content\Models\Offer'
    ];

    /**
     * Retrieve the offer property
     *
     * @return Offer|null
     */
    public function getOffer()
    {
        return $this->offer;
    }
}
