<?php

namespace YandexOld\Market\Content\Models;

use YandexOld\Common\ObjectModel;
use YandexOld\Market\Content\Models\ModelVisualPhoto;

class ModelVisualPhotos extends ObjectModel
{
    /**
     * Add photo to collection
     *
     * @param ModelVisualPhoto|array $photo
     *
     * @return ModelVisualPhotos
     */
    public function add($photo)
    {
        if (is_array($photo)) {
            $this->collection[] = new ModelVisualPhoto($photo);
        } elseif (is_object($photo) && $photo instanceof ModelVisualPhoto) {
            $this->collection[] = $photo;
        }

        return $this;
    }

    /**
     * Retrieve the collection property
     *
     * @return ModelVisualPhotos|null
     */
    public function getAll()
    {
        return $this->collection;
    }
}
