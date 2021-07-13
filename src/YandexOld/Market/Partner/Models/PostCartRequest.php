<?php

namespace YandexOld\Market\Partner\Models;

use YandexOld\Market\Partner\Models\CartRequest;
use YandexOld\Common\Model;

class PostCartRequest extends Model
{

    protected $cart = null;

    protected $mappingClasses = [
        'cart' => 'YandexOld\Market\Partner\Models\CartRequest'
    ];

    protected $propNameMap = [];

    /**
     * Retrieve the cart property
     *
     * @return CartRequest|null
     */
    public function getCart()
    {
        return $this->cart;
    }

    /**
     * Set the cart property
     *
     * @param CartRequest $cart
     * @return $this
     */
    public function setCart($cart)
    {
        $this->cart = $cart;
        return $this;
    }
}
