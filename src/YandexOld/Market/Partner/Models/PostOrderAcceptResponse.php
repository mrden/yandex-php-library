<?php

namespace YandexOld\Market\Partner\Models;

use YandexOld\Market\Partner\Models\AcceptOrder;
use YandexOld\Common\Model;

class PostOrderAcceptResponse extends Model
{

    protected $order = null;

    protected $mappingClasses = [
        'order' => 'YandexOld\Market\Partner\Models\AcceptOrder'
    ];

    protected $propNameMap = [];

    /**
     * Retrieve the order property
     *
     * @return AcceptOrder|null
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set the order property
     *
     * @param AcceptOrder $order
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }
}
