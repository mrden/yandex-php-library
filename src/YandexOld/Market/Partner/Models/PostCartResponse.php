<?php

namespace YandexOld\Market\Partner\Models;

use YandexOld\Market\Partner\Models\CartResponse;
use YandexOld\Common\Model;

class PostCartResponse extends Model
{

    protected $cart = null;

    protected $mappingClasses = [
        'cart' => 'YandexOld\Market\Partner\Models\CartResponse'
    ];

    protected $propNameMap = [];

    /**
     * Retrieve the cart property
     *
     * @return CartResponse|null
     */
    public function getCart()
    {
        return $this->cart;
    }

    /**
     * Set the cart property
     *
     * @param CartResponse $cart
     * @return $this
     */
    public function setCart($cart)
    {
        $this->cart = $cart;
        return $this;
    }
}
