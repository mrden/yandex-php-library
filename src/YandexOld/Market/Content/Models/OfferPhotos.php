<?php

namespace YandexOld\Market\Content\Models;

use YandexOld\Common\ObjectModel;
use YandexOld\Market\Content\Models\OfferPhoto;

class OfferPhotos extends ObjectModel
{
    /**
     * Add photo to collection
     *
     * @param OfferPhoto|array $photo
     *
     * @return OfferPhotos
     */
    public function add($photo)
    {
        if (is_array($photo)) {
            $this->collection[] = new OfferPhoto($photo);
        } elseif (is_object($photo) && $photo instanceof OfferPhoto) {
            $this->collection[] = $photo;
        }

        return $this;
    }

    /**
     * Retrieve the collection property
     *
     * @return Photos|null
     */
    public function getAll()
    {
        return $this->collection;
    }
}
