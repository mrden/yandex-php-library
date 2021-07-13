<?php
/**
 * Yandex PHP Library
 *
 * @copyright NIX Solutions Ltd.
 * @link      https://github.com/nixsolutions/yandex-php-library
 */
/**
 * @namespace
 */
namespace YandexOld\Tests\Metrica;

use YandexOld\Metrica\Management\AccountsClient;
use YandexOld\Metrica\Management\CountersClient;
use YandexOld\Metrica\Management\DelegatesClient;
use YandexOld\Metrica\Management\FiltersClient;
use YandexOld\Metrica\Management\GoalsClient;
use YandexOld\Metrica\Management\GrantsClient;
use YandexOld\Metrica\Management\ManagementClient;
use YandexOld\Metrica\Management\OperationsClient;
use YandexOld\Tests\TestCase;

/**
 * PackageTest
 *
 * @category Yandex
 * @package  Tests
 *
 * @author   Alex Khaylo
 * @created  18.03.16 16:40
 */
class ManagementClientTest extends TestCase
{
    public function testGetCountersClient()
    {
        $token         = 'test';
        $metricaClient = new ManagementClient($token);
        $client        = $metricaClient->counters();
        $this->assertTrue($client instanceof CountersClient);
        $this->assertEquals($token, $client->getAccessToken());
    }

    public function testGetGoalsClient()
    {
        $token         = 'test';
        $metricaClient = new ManagementClient($token);
        $client        = $metricaClient->goals();
        $this->assertTrue($client instanceof GoalsClient);
        $this->assertEquals($token, $client->getAccessToken());
    }

    public function testGetFiltersClient()
    {
        $token         = 'test';
        $metricaClient = new ManagementClient($token);
        $client        = $metricaClient->filters();
        $this->assertTrue($client instanceof FiltersClient);
        $this->assertEquals($token, $client->getAccessToken());
    }

    public function testGetOperationsClient()
    {
        $token         = 'test';
        $metricaClient = new ManagementClient($token);
        $client        = $metricaClient->operations();
        $this->assertTrue($client instanceof OperationsClient);
        $this->assertEquals($token, $client->getAccessToken());
    }

    public function testGetGrantsClient()
    {
        $token         = 'test';
        $metricaClient = new ManagementClient($token);
        $client        = $metricaClient->grants();
        $this->assertTrue($client instanceof GrantsClient);
        $this->assertEquals($token, $client->getAccessToken());
    }

    public function testGetDelegatesClient()
    {
        $token         = 'test';
        $metricaClient = new ManagementClient($token);
        $client        = $metricaClient->delegates();
        $this->assertTrue($client instanceof DelegatesClient);
        $this->assertEquals($token, $client->getAccessToken());
    }

    public function testGetAccountsClient()
    {
        $token         = 'test';
        $metricaClient = new ManagementClient($token);
        $client        = $metricaClient->accounts();
        $this->assertTrue($client instanceof AccountsClient);
        $this->assertEquals($token, $client->getAccessToken());
    }
}
