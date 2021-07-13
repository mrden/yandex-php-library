<?php

namespace YandexOld\Metrica\Management\Models;

use YandexOld\Metrica\Management\Models\Delegates;
use YandexOld\Common\Model;

class GetDelegatesResponse extends Model
{

    protected $delegates = null;

    protected $mappingClasses = [
        'delegates' => 'YandexOld\Metrica\Management\Models\Delegates'
    ];

    protected $propNameMap = [];

    /**
     * Retrieve the delegates property
     *
     * @return Delegates|null
     */
    public function getDelegates()
    {
        return $this->delegates;
    }

    /**
     * Set the delegates property
     *
     * @param Delegates $delegates
     * @return $this
     */
    public function setDelegates($delegates)
    {
        $this->delegates = $delegates;
        return $this;
    }
}
