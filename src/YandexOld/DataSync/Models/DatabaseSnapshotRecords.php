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
namespace YandexOld\DataSync\Models;

use YandexOld\Common\Model;
use YandexOld\DataSync\Models\Database\Delta\Records;

/**
 * Class Records
 *
 * @package  Yandex\DataSync
 * @author   Alexander Khaylo <naxel@land.ru>
 */
class DatabaseSnapshotRecords extends Model
{
    protected $mappingClasses = [
        'items' => 'YandexOld\DataSync\Models\Database\Delta\Records',
    ];

    protected $items;

    /**
     * @return Records
     */
    public function getItems()
    {
        return $this->items;
    }
}
