<?php
namespace YandexOld\Tests\Metrica\Models\Stat;

use YandexOld\Tests\Metrica\Fixtures\Stat;
use YandexOld\Tests\TestCase;
use YandexOld\Metrica\Stat\Models;

class DrillDownComparisonItemsTest extends TestCase
{

    public function testGet()
    {
        $fixtures = Stat::$drillDownFixtures;

        $dimension = new Models\Dimension();
        $dimension
            ->setId($fixtures["data"][0]["dimension"]["id"])
            ->setName($fixtures["data"][0]["dimension"]["name"]);

        $dimensions = new Models\Dimensions();
        $dimensions->add($dimension);

        $items = new Models\Items();
        $items
            ->setDimensions($dimensions)
            ->setMetrics($fixtures["data"][0]["metrics"]);

        $dimensions = $items->getDimensions()->getAll();

        $this->assertEquals($fixtures["data"][0]["dimension"]["name"], $dimensions[0]->getName());
        $this->assertEquals($fixtures["data"][0]["dimension"]["id"], $dimensions[0]->getId());
        $this->assertEquals($fixtures["data"][0]["metrics"], $items->getMetrics());
    }
}
 