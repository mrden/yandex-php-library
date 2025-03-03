<?php

namespace YandexOld\Market\Content\Models;

use YandexOld\Common\Model;

class ResponseShopGet extends Model
{
    protected $shop = null;

    protected $mappingClasses = [
        'shop' => 'YandexOld\Market\Content\Models\Shop'
    ];

    /**
     * Retrieve the shop property
     *
     * @return Shop|null
     */
    public function getShop()
    {
        return $this->shop;
    }
}
