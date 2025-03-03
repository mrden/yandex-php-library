<?php

namespace YandexOld\Metrica\Management\Models;

use YandexOld\Common\Model;

class AddDelegateResponse extends Model
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
