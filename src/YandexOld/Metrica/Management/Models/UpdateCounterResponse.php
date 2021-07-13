<?php

namespace YandexOld\Metrica\Management\Models;

use YandexOld\Metrica\Management\Models\Counter;
use YandexOld\Common\Model;

class UpdateCounterResponse extends Model
{

    protected $counter = null;

    protected $mappingClasses = [
        'counter' => 'YandexOld\Metrica\Management\Models\Counter'
    ];

    protected $propNameMap = [];

    /**
     * Retrieve the counter property
     *
     * @return Counter|null
     */
    public function getCounter()
    {
        return $this->counter;
    }

    /**
     * Set the counter property
     *
     * @param Counter $counter
     * @return $this
     */
    public function setCounter($counter)
    {
        $this->counter = $counter;
        return $this;
    }
}
