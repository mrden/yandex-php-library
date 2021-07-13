<?php

namespace YandexOld\Tests\Metrica\Models\Management;

use YandexOld\Metrica\Management\Models;
use YandexOld\Tests\TestCase;
use YandexOld\Tests\Metrica\Fixtures\Grants;

class GrantResponseTest extends TestCase
{
    public function testAddGrantResponse()
    {
        $fixtures = Grants::$grantFixtures;
        $response = new Models\AddGrantResponse();
        $grant    = new Models\Grant($fixtures['grant']);
        $response->setGrant($grant);
        $this->assertTrue($response->getGrant() instanceof Models\Grant);
    }

    public function testGetGrantResponse()
    {
        $fixtures = Grants::$grantFixtures;
        $response = new Models\GetGrantResponse();
        $grant    = new Models\Grant($fixtures['grant']);
        $response->setGrant($grant);
        $this->assertTrue($response->getGrant() instanceof Models\Grant);
    }

    public function testGetGrantsResponse()
    {
        $fixtures = Grants::$grantsFixtures;
        $response = new Models\GetGrantsResponse();
        $grants    = new Models\Grants($fixtures['grants']);
        $response->setGrants($grants);
        $this->assertTrue($response->getGrants() instanceof Models\Grants);
    }

    public function testUpdateGrantResponse()
    {
        $fixtures = Grants::$grantFixtures;
        $response = new Models\UpdateGrantResponse();
        $grant    = new Models\Grant($fixtures['grant']);
        $response->setGrant($grant);
        $this->assertTrue($response->getGrant() instanceof Models\Grant);
    }
}
