<?php

namespace YandexOld\Market\Partner\Models;

use YandexOld\Market\Partner\Models\Order;
use YandexOld\Common\Model;

class UpdateOrderStatusRequest extends Model
{

    protected $order = null;

    protected $mappingClasses = [
        'order' => 'YandexOld\Market\Partner\Models\Order'
    ];

    protected $propNameMap = [];

    /**
     * Retrieve the order property
     *
     * @return Order|null
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set the order property
     *
     * @param Order $order
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }
}
