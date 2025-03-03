<?php
namespace YandexOld\Tests\Metrica\Models\Stat;

use YandexOld\Tests\Metrica\Fixtures\Stat;
use YandexOld\Tests\TestCase;
use YandexOld\Metrica\Stat\Models;

/**
 * Class ComparisonParamsTest
 * @package Yandex\Tests\Metrica\Models\Stat
 */
class ComparisonParamsTest extends TestCase
{

    public function testGet()
    {
        $fixtures = Stat::$comparisonParamsFixtures;

        $comparisonParams = new Models\ComparisonParams();
        $comparisonParams->setId($fixtures['id'])
            ->setPreset($fixtures['preset'])
            ->setDimensions($fixtures['dimensions'])
            ->setMetrics($fixtures['metrics'])
            ->setSort($fixtures['sort'])
            ->setLimit($fixtures['limit'])
            ->setOffset($fixtures['offset'])
            ->setFiltersA($fixtures['filters_a'])
            ->setFiltersB($fixtures['filters_b'])
            ->setDate1A($fixtures['date1_a'])
            ->setDate1B($fixtures['date1_b'])
            ->setDate2A($fixtures['date2_a'])
            ->setDate2B($fixtures['date2_b'])
            ->setFilters($fixtures['filters'])
            ->setAccuracy($fixtures['accuracy'])
            ->setCallback($fixtures['callback'])
            ->setIncludeUndefined($fixtures['include_undefined'])
            ->setLang($fixtures['lang'])
            ->setPretty($fixtures['pretty']);

        $this->assertEquals($fixtures['id'], $comparisonParams->getId());
        $this->assertEquals($fixtures['preset'], $comparisonParams->getPreset());
        $this->assertEquals($fixtures['dimensions'], $comparisonParams->getDimensions());
        $this->assertEquals($fixtures['metrics'], $comparisonParams->getMetrics());
        $this->assertEquals($fixtures['sort'], $comparisonParams->getSort());
        $this->assertEquals($fixtures['limit'], $comparisonParams->getLimit());
        $this->assertEquals($fixtures['offset'], $comparisonParams->getOffset());
        $this->assertEquals($fixtures['filters_a'], $comparisonParams->getFiltersA());
        $this->assertEquals($fixtures['filters_b'], $comparisonParams->getFiltersB());
        $this->assertEquals($fixtures['date1_a'], $comparisonParams->getDate1A());
        $this->assertEquals($fixtures['date1_b'], $comparisonParams->getDate1B());
        $this->assertEquals($fixtures['date2_a'], $comparisonParams->getDate2A());
        $this->assertEquals($fixtures['date2_b'], $comparisonParams->getDate2B());
        $this->assertEquals($fixtures['filters'], $comparisonParams->getFilters());
        $this->assertEquals($fixtures['accuracy'], $comparisonParams->getAccuracy());
        $this->assertEquals($fixtures['callback'], $comparisonParams->getCallback());
        $this->assertEquals($fixtures['include_undefined'], $comparisonParams->getIncludeUndefined());
        $this->assertEquals($fixtures['lang'], $comparisonParams->getLang());
        $this->assertEquals($fixtures['pretty'], $comparisonParams->getPretty());
    }
}
