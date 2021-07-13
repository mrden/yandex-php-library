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

use GuzzleHttp\Client as GuzzleHttpClient;
use YandexOld\Metrica\Stat\DataClient;
use YandexOld\Metrica\Stat\StatClient;
use YandexOld\Tests\TestCase;

/**
 * PackageTest
 *
 * @category Yandex
 * @package  Tests
 *
 * @author   Alex Khaylo
 * @created  18.03.16 16:58
 */
class StatClientTest extends TestCase
{
    public function testGetCountersClient()
    {
        $token      = 'test';
        $statClient = new StatClient($token);
        $client     = $statClient->data();
        $this->assertTrue($client instanceof DataClient);
        $this->assertEquals($token, $client->getAccessToken());
    }

    /**
     * @covers \YandexOld\Metrica\Stat\StatClient::data
     */
    public function testMethodDataWithCustomClient()
    {
        $token      = 'test';
        $mock = $this->getMockBuilder(GuzzleHttpClient::class)
            ->setMethods(['request'])
            ->getMock();
        $statClient = new StatClient($token, $mock);
        $client     = $statClient->data();
        $this->assertTrue($client instanceof DataClient);
        $this->assertEquals($token, $client->getAccessToken());
    }
}
