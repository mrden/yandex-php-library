<?php
/**
 * Yandex PHP Library
 *
 * @copyright NIX Solutions Ltd.
 * @link      https://github.com/nixsolutions/yandex-php-library
 */
namespace YandexOld\DataSync\Responses;

use YandexOld\Common\Model;

/**
 * Class DatabasesResponse
 *
 * @package  Yandex\DataSync\Responses
 * @author   Alexander Khaylo <naxel@land.ru>
 */
class DatabasesResponse extends Model
{
    protected $items = null;

    protected $total = null;

    protected $limit = null;

    protected $offset = null;

    protected $mappingClasses = [
        'items' => 'YandexOld\DataSync\Models\Databases',
    ];

    /**
     * An array of objects containing information about existing databases.
     *
     * @return \YandexOld\DataSync\Models\Databases
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @return null
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @return null
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @return null
     */
    public function getTotal()
    {
        return $this->total;
    }
}
