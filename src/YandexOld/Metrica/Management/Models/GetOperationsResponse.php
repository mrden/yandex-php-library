<?php

namespace YandexOld\Metrica\Management\Models;

use YandexOld\Metrica\Management\Models\Operations;
use YandexOld\Common\Model;

class GetOperationsResponse extends Model
{

    protected $operations = null;

    protected $mappingClasses = [
        'operations' => 'Yandex\Metrica\Management\Models\Operations'
    ];

    protected $propNameMap = [];

    /**
     * Retrieve the operations property
     *
     * @return Operations|null
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * Set the operations property
     *
     * @param Operations $operations
     * @return $this
     */
    public function setOperations($operations)
    {
        $this->operations = $operations;
        return $this;
    }
}
