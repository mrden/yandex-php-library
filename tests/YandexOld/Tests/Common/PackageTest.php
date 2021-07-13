<?php
/**
 * @namespace
 */
namespace YandexOld\Tests\Common;

use YandexOld\Tests\TestCase;
use YandexOld\Tests\Fixtures\Fixtures;

/**
 * PackageTest
 *
 * @category Yandex
 * @package  Tests
 *
 * @author   Anton Shevchuk
 * @created  07.08.13 11:52
 */
class PackageTest extends TestCase
{
    /**
     * @var \YandexOld\Tests\Fixtures\Fixtures
     */
    protected $fixture;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        parent::setUp();
        $this->fixture = new Fixtures();
    }

    /**
     * Complex test for custom getter and setter functions
     */
    public function testSetGet()
    {
        $this->fixture->foo = 2;

        $this->assertEquals($this->fixture->foo, 8);
    }

    /**
     *
     */
    public function testSetSettings()
    {
        $this->fixture->setSettings(
            [
                'bar' => 42
            ]
        );

        $this->assertEquals($this->fixture->bar, 42);
    }

    /**
     * test CamelCase Settings
     */
    public function testCamelCaseSettings()
    {
        $this->fixture->setSettings(
            [
                'foo_bar' => 42
            ]
        );

        $this->assertEquals($this->fixture->fooBar, 42);
    }

    /**
     * @covers YandexOld\Common\AbstractPackage::checkSettings
     * @expectedException \YandexOld\Common\Exception\InvalidSettingsException
     */
    public function testCheckSettings()
    {

        $this->fixture->setSettings(
            [
                'bar' => null,
                'foo' => 42
            ]
        );

        $this->fixture->checkSettings();
    }

    /**
     * @covers YandexOld\Common\AbstractPackage::__set
     * @expectedException \YandexOld\Common\Exception\RealizationException
     */
    public function testSetRealizationException()
    {
        $this->fixture->readOnly = "KO";
    }

    /**
     * @covers YandexOld\Common\AbstractPackage::__set
     * @expectedException \YandexOld\Common\Exception\InvalidSettingsException
     */
    public function testSetWrongKey()
    {
        $this->fixture->notExists = "KO";
    }

    /**
     * @covers YandexOld\Common\AbstractPackage::__get
     * @expectedException \YandexOld\Common\Exception\RealizationException
     */
    public function testGetRealizationException()
    {
        $this->fixture->writeOnly;
    }

    /**
     * @covers YandexOld\Common\AbstractPackage::__set
     * @expectedException \YandexOld\Common\Exception\InvalidSettingsException
     */
    public function testGetWrongKey()
    {
        $some = $this->fixture->notExists;
    }
}
