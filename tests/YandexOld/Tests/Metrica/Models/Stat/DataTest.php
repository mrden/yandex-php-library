<?php
namespace YandexOld\Tests\Metrica\Models\Stat;

use YandexOld\Tests\Metrica\Fixtures\Stat;
use YandexOld\Tests\TestCase;
use YandexOld\Metrica\Stat\Models;

class DataTest extends TestCase
{

    public function testGet()
    {
        $fixtures = Stat::$tableFixtures;

        $items = new Models\Items();
        $items
            ->setDimensions($fixtures['data'][0]['dimensions'])
            ->setMetrics($fixtures['data'][0]['metrics']);

        $data = new Models\Data();
        $data->add($items);
        $data = $data->getAll();

        $this->assertEquals($fixtures['data'][0]['dimensions'], $data[0]->getDimensions());
        $this->assertEquals($fixtures['data'][0]['metrics'], $data[0]->getMetrics());
    }
}
 