<?php

namespace YandexOld\Market\Partner\Models;

use YandexOld\Market\Partner\Models\Pager;
use YandexOld\Market\Partner\Models\Orders;
use YandexOld\Common\Model;

class GetOrdersResponse extends Model
{

    protected $pager = null;

    protected $orders = null;

    protected $mappingClasses = [
        'pager' => 'YandexOld\Market\Partner\Models\Pager',
        'orders' => 'YandexOld\Market\Partner\Models\Orders'
    ];

    protected $propNameMap = [];

    /**
     * Retrieve the pager property
     *
     * @return Pager|null
     */
    public function getPager()
    {
        return $this->pager;
    }

    /**
     * Set the pager property
     *
     * @param Pager $pager
     * @return $this
     */
    public function setPager($pager)
    {
        $this->pager = $pager;
        return $this;
    }

    /**
     * Retrieve the orders property
     *
     * @return Orders|null
     */
    public function getOrders()
    {
        return $this->orders;
    }
}
