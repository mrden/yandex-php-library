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

use YandexOld\Metrica\Analytics\GaClient;
use YandexOld\Metrica\Analytics\AnalyticsClient;
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
class AnalyticsClientTest extends TestCase
{
    public function testGetCountersClient()
    {
        $token           = 'test';
        $analyticsClient = new AnalyticsClient($token);
        $client          = $analyticsClient->ga();
        $this->assertTrue($client instanceof GaClient);
        $this->assertEquals($token, $client->getAccessToken());
    }
}
