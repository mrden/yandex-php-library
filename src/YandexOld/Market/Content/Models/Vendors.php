<?php

namespace YandexOld\Market\Content\Models;

use YandexOld\Common\ObjectModel;

class Vendors extends ObjectModel
{
    /**
     * Add vendor to collection
     *
     * @param Vendor|array $vendor
     *
     * @return Vendors
     */
    public function add($vendor)
    {
        if (is_array($vendor)) {
            $this->collection[] = new Vendor($vendor);
        } elseif (is_object($vendor) && $vendor instanceof Vendor) {
            $this->collection[] = $vendor;
        }

        return $this;
    }

    /**
     * Retrieve the collection property
     *
     * @return Vendors|null
     */
    public function getAll()
    {
        return $this->collection;
    }
}
