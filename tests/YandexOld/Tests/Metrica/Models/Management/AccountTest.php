<?php
namespace YandexOld\Tests\Metrica\Models\Management;

use YandexOld\Metrica\Management\Models\Account;
use YandexOld\Tests\TestCase;
use YandexOld\Tests\Metrica\Fixtures\Accounts;

class AccountTest extends TestCase
{

    public function testGet()
    {
        $fixtures = Accounts::$accountsFixtures;

        $account = new Account();
        $account
            ->setCreatedAt($fixtures["accounts"][0]["created_at"])
            ->setUserLogin($fixtures["accounts"][0]["user_login"]);

        $this->assertEquals($fixtures["accounts"][0]["user_login"], $account->getUserLogin());
        $this->assertEquals($fixtures["accounts"][0]["created_at"], $account->getCreatedAt());
    }
}
