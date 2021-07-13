<?php

namespace YandexOld\Tests\Metrica\Models\Management;

use YandexOld\Metrica\Management\Models;
use YandexOld\Tests\TestCase;
use YandexOld\Tests\Metrica\Fixtures\Filters;

class FilterResponseTest extends TestCase
{
    public function testAddFilterResponse()
    {
        $fixtures = Filters::$filterFixtures;
        $response = new Models\AddFilterResponse();
        $filter   = new Models\Filter($fixtures['filter']);
        $response->setFilter($filter);
        $this->assertTrue($response->getFilter() instanceof Models\Filter);
    }

    public function testGetFilterResponse()
    {
        $fixtures = Filters::$filterFixtures;
        $response = new Models\GetFilterResponse();
        $filter   = new Models\Filter($fixtures['filter']);
        $response->setFilter($filter);
        $this->assertTrue($response->getFilter() instanceof Models\Filter);
    }

    public function testGetFiltersResponse()
    {
        $fixtures = Filters::$filtersFixtures;
        $response = new Models\GetFiltersResponse();
        $filters  = new Models\Filters($fixtures);
        $response->setFilters($filters);
        $this->assertTrue($response->getFilters() instanceof Models\Filters);
    }

    public function testUpdateFilterResponse()
    {
        $fixtures = Filters::$filterFixtures;
        $response = new Models\UpdateFilterResponse();
        $filter   = new Models\Filter($fixtures['filter']);
        $response->setFilter($filter);
        $this->assertTrue($response->getFilter() instanceof Models\Filter);
    }
}
