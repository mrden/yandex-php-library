<?php

namespace YandexOld\Market\Content\Models;

use YandexOld\Common\Model;

class ResponseVendorGet extends Model
{
    protected $time = null;

    protected $vendor = null;

    protected $mappingClasses = [
        'vendor' => 'YandexOld\Market\Content\Models\Vendor'
    ];

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
