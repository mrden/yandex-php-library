<?php

namespace YandexOld\Market\Partner\Models;

use YandexOld\Common\Model;
use YandexOld\Market\Partner\Models\Balance;

class GetBalanceResponse extends Model
{
    /**
     * @var Balance|null
     */
    protected $balance = null;

    protected $mappingClasses = [
        'balance' => 'YandexOld\Market\Partner\Models\Balance'
    ];

    /**
     * @return Balance|null
     */
    public function getBalance()
    {
        return $this->balance;
    }
}
