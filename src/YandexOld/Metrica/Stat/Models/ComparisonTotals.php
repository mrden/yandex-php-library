<?php

namespace YandexOld\Metrica\Stat\Models;

use YandexOld\Common\Model;

class ComparisonTotals extends Model
{

    protected $a = null;

    protected $b = null;

    protected $mappingClasses = [];

    protected $propNameMap = [];

    /**
     * Retrieve the a property
     *
     * @return array|null
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * Set the a property
     *
     * @param array $a
     * @return $this
     */
    public function setA($a)
    {
        $this->a = $a;
        return $this;
    }

    /**
     * Retrieve the b property
     *
     * @return array|null
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * Set the b property
     *
     * @param array $b
     * @return $this
     */
    public function setB($b)
    {
        $this->b = $b;
        return $this;
    }
}
