<?php

namespace YandexOld\Metrica\Management\Models;

use YandexOld\Metrica\Management\Models\Accounts;
use YandexOld\Common\Model;

class UpdateAccountResponse extends Model
{

    protected $accounts = null;

    protected $mappingClasses = [
        'accounts' => 'YandexOld\Metrica\Management\Models\Accounts'
    ];

    protected $propNameMap = [];

    /**
     * Retrieve the accounts property
     *
     * @return Accounts|null
     */
    public function getAccounts()
    {
        return $this->accounts;
    }

    /**
     * Set the accounts property
     *
     * @param Accounts $accounts
     * @return $this
     */
    public function setAccounts($accounts)
    {
        $this->accounts = $accounts;
        return $this;
    }
}
