<?php

namespace YandexOld\Metrica\Management\Models;

use YandexOld\Metrica\Management\Models\Grants;
use YandexOld\Common\Model;

class GetGrantsResponse extends Model
{

    protected $grants = null;

    protected $mappingClasses = [
        'grants' => 'YandexOld\Metrica\Management\Models\Grants'
    ];

    protected $propNameMap = [];

    /**
     * Retrieve the grants property
     *
     * @return Grants|null
     */
    public function getGrants()
    {
        return $this->grants;
    }

    /**
     * Set the grants property
     *
     * @param Grants $grants
     * @return $this
     */
    public function setGrants($grants)
    {
        $this->grants = $grants;
        return $this;
    }
}
