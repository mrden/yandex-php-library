<?php
namespace YandexOld\Tests\Metrica\Models\Management;

use YandexOld\Tests\Metrica\Fixtures\Counters;
use YandexOld\Tests\TestCase;
use YandexOld\Metrica\Management\Models;

class WebvisorTest extends TestCase
{

    public function testGet()
    {
        $fixtures = Counters::$countersFixtures;

        $webvisor = new Models\Webvisor();
        $webvisor
            ->setArchEnabled($fixtures['counters'][1]['webvisor']['arch_enabled'])
            ->setArchType($fixtures['counters'][1]['webvisor']['arch_type'])
            ->setLoadPlayerType($fixtures['counters'][1]['webvisor']['load_player_type'])
            ->setUrls($fixtures['counters'][1]['webvisor']['urls']);

        $this->assertEquals($fixtures['counters'][1]['webvisor']['arch_enabled'], $webvisor->getArchEnabled());
        $this->assertEquals($fixtures['counters'][1]['webvisor']['arch_type'], $webvisor->getArchType());
        $this->assertEquals($fixtures['counters'][1]['webvisor']['load_player_type'], $webvisor->getLoadPlayerType());
        $this->assertEquals($fixtures['counters'][1]['webvisor']['urls'], $webvisor->getUrls());
    }
}
 