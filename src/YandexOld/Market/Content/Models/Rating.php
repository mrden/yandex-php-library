<?php

namespace YandexOld\Market\Content\Models;

use YandexOld\Common\Model;

class Rating extends Model
{
    protected $value = null;

    protected $count = null;

    /**
     * Retrieve the value property
     *
     * @return float|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Retrieve the count property
     *
     * @return float|null
     */
    public function getCount()
    {
        return $this->count;
    }
}
