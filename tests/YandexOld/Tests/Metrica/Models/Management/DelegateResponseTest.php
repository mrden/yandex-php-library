<?php

namespace YandexOld\Tests\Metrica\Models\Management;

use YandexOld\Metrica\Management\Models;
use YandexOld\Tests\TestCase;
use YandexOld\Tests\Metrica\Fixtures\Delegates;

class DelegateResponseTest extends TestCase
{
    public function testAddDelegateResponse()
    {
        $fixtures  = Delegates::$delegatesFixtures;
        $response  = new Models\AddDelegateResponse();
        $delegates = new Models\Delegates($fixtures['delegates'][0]);
        $response->setDelegates($delegates);
        $this->assertTrue($response->getDelegates() instanceof Models\Delegates);
    }

    public function testGetDelegatesResponse()
    {
        $fixtures  = Delegates::$delegatesFixtures;
        $response  = new Models\GetDelegatesResponse();
        $delegates = new Models\Delegates($fixtures['delegates'][0]);
        $response->setDelegates($delegates);
        $this->assertTrue($response->getDelegates() instanceof Models\Delegates);
    }

    public function testUpdateDelegateResponse()
    {
        $fixtures  = Delegates::$delegatesFixtures;
        $response  = new Models\UpdateDelegateResponse();
        $delegates = new Models\Delegates($fixtures['delegates'][0]);
        $response->setDelegates($delegates);
        $this->assertTrue($response->getDelegates() instanceof Models\Delegates);
    }
}
