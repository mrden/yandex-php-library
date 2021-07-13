<?php
namespace YandexOld\Market\Partner\Models;

use YandexOld\Common\ObjectModel;

class Stats extends ObjectModel
{
    protected $collection = [];

    protected $mappingClasses = [];

    protected $propNameMap = [];

    /**
     * Add item
     */
    public function add($stat)
    {
        if (is_array($stat)) {
            $this->collection[] = new Stat($stat);
        } elseif (is_object($stat) && $stat instanceof Stat) {
            $this->collection[] = $stat;
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
