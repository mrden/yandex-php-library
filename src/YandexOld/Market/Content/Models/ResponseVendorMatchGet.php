<?php
namespace YandexOld\Market\Content\Models;

use YandexOld\Common\Model;

class ResponseVendorMatchGet extends Model
{
    protected $time = null;

    protected $vendor = null;

    protected $mappingClasses = [
        'vendor' => 'Yandex\Market\Content\Models\Vendor'
    ];

    /**
     * Retrieve the time property
     *
     * @return int|null
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Retrieve the categories property
     *
     * @return Categories|null
     */
    public function getVendor()
    {
        return $this->vendor;
    }
}
