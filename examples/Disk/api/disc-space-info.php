<?php
/**
 * Example of usage Yandex\Disk package
 *
 * @author   Alexander Mitsura
 * @created  15.10.13 10:36
 */

$settings = require_once '../../settings.php';

use YandexOld\OAuth\OAuthClient;

$client = new OAuthClient($settings['global']['clientId']);

if (isset($_COOKIE['yaAccessToken'])) {

    $client->setAccessToken($_COOKIE['yaAccessToken']);

    // XXX: how it should be (using user access token)
    //$diskClient = new \Yandex\Disk\DiskClient($client->getAccessToken());

    // XXX: how it is now (using magic access token)
    $diskClient = new \YandexOld\Disk\DiskClient($client->getAccessToken());

    $diskClient->setServiceScheme(\YandexOld\Disk\DiskClient::HTTPS_SCHEME);

    header('Content-type: application/json');
    $result = $diskClient->diskSpaceInfo();
    $result['login'] = $diskClient->getLogin();
    echo json_encode($result);
}