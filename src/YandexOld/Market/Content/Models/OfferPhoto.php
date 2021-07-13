<?php

namespace YandexOld\Market\Content\Models;

use YandexOld\Market\Content\Models\Base\Photo;

class OfferPhoto extends Photo
{
    protected $id = null;

    /**
     * Retrieve the id property
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
}
