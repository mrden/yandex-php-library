<?php
namespace YandexOld\Tests\Metrica\Models\Stat;

use YandexOld\Tests\Metrica\Fixtures\Stat;
use YandexOld\Tests\TestCase;
use YandexOld\Metrica\Stat\Models;

class DimensionTest extends TestCase
{

    public function testGet()
    {
        $fixtures = Stat::$drillDownFixtures;

        $dimension = new Models\Dimension();
        $dimension
            ->setId($fixtures["data"][0]["dimension"]["id"])
            ->setName($fixtures["data"][0]["dimension"]["name"]);

        $this->assertEquals($fixtures["data"][0]["dimension"]["name"], $dimension->getName());
        $this->assertEquals($fixtures["data"][0]["dimension"]["id"], $dimension->getId());
    }
}
 