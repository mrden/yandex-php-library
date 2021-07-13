<?php
namespace YandexOld\Tests\Metrica\Models\Stat;

use YandexOld\Tests\Metrica\Fixtures\Stat;
use YandexOld\Tests\TestCase;
use YandexOld\Metrica\Stat\Models;

class ItemsTest extends TestCase
{

    public function testGet()
    {
        $fixtures = Stat::$tableFixtures;

        $items = new Models\Items();
        $items
            ->setDimensions($fixtures['data'][0]['dimensions'])
            ->setMetrics($fixtures['data'][0]['metrics']);

        $this->assertEquals($fixtures["data"][0]["dimensions"], $items->getDimensions());
        $this->assertEquals($fixtures["data"][0]["metrics"], $items->getMetrics());
    }
}
 