<?php

namespace YandexOld\Tests\Metrica\Models\Management;

use YandexOld\Metrica\Management\Models;
use YandexOld\Tests\TestCase;
use YandexOld\Tests\Metrica\Fixtures\Accounts;

class AccountsTest extends TestCase
{
    public function testSetGet()
    {
        $fixtures  = Accounts::$accountsFixtures;
        $accounts  = new Models\Accounts();
        $accounts2 = new Models\Accounts();
        $account   = new Models\Account($fixtures["accounts"][0]);
        $accounts->add($account);
        $accounts2->add($fixtures["accounts"][0]);
        $this->assertEquals($fixtures["accounts"][0], $accounts->getAll()[0]->toArray());
        $this->assertEquals($fixtures["accounts"][0], $accounts2->getAll()[0]->toArray());
    }
}
