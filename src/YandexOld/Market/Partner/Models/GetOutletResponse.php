<?php

namespace YandexOld\Market\Partner\Models;

use YandexOld\Market\Partner\Models\Outlet;
use YandexOld\Common\Model;

class GetOutletResponse extends Model
{
    protected $outlet = null;

    protected $mappingClasses = [
        'outlet' => 'YandexOld\Market\Partner\Models\Outlet'
    ];

    protected $propNameMap = [];

    /**
     * @return Outlet|null
     */
    public function getOutlet()
    {
        return $this->outlet;
    }
}
