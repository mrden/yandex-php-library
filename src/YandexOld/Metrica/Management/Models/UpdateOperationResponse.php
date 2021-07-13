<?php

namespace YandexOld\Metrica\Management\Models;

use YandexOld\Metrica\Management\Models\Operation;
use YandexOld\Common\Model;

class UpdateOperationResponse extends Model
{

    protected $operation = null;

    protected $mappingClasses = [
        'operation' => 'Yandex\Metrica\Management\Models\Operation'
    ];

    protected $propNameMap = [];

    /**
     * Retrieve the operation property
     *
     * @return Operation|null
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Set the operation property
     *
     * @param Operation $operation
     * @return $this
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;
        return $this;
    }
}
