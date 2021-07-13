<?php
/**
 * Yandex PHP Library
 *
 * @copyright NIX Solutions Ltd.
 * @link https://github.com/nixsolutions/yandex-php-library
 */

/**
 * @namespace
 */
namespace YandexOld\Metrica\Analytics;

use YandexOld\Metrica\MetricaClient;

class AnalyticsClient extends MetricaClient
{
    /**
     * API domain
     *
     * @var string
     */
    protected $serviceDomain = 'api-metrika.yandex.ru/analytics/v3/data';


    public function ga()
    {
        return new GaClient($this->getAccessToken());
    }
}
