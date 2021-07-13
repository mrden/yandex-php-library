<?php

namespace YandexOld\Market\Partner\Models;

use YandexOld\Common\ObjectModel;

class Outlets extends ObjectModel
{

    protected $collection = [];

    protected $mappingClasses = [];

    protected $propNameMap = [];

    /**
     * Add item
     */
    public function add($outlet)
    {
        if (is_array($outlet)) {
            $this->collection[] = new Outlet($outlet);
        } elseif (is_object($outlet) && $outlet instanceof Outlet) {
            $this->collection[] = $outlet;
        }

        return $this;
    }

    /**
     * Get items
     */
    public function getAll()
    {
        return $this->collection;
    }
}
