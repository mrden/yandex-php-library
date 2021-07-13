<?php

namespace YandexOld\Market\Partner\Models;

use YandexOld\Common\Model;
use YandexOld\Common\StringCollection;

class Outlet extends Model
{
    protected $id = null;

    protected $mappingClasses = [
        'address' => 'YandexOld\Market\Partner\Models\AddressOutlet',
        'deliveryRules' => 'YandexOld\Market\Partner\Models\DeliveryRules',
        'emails' => 'YandexOld\Common\StringCollection',
        'phones' => 'YandexOld\Common\StringCollection'
    ];

    protected $propNameMap = [];

    /**
     * @var null|boolean
     */
    protected $isBookNow = null;

    /**
     * @var null|boolean
     */
    protected $isMain = null;

    /**
     * @var null|string
     */
    protected $name = null;

    /**
     * @var null|string
     */
    protected $reason = null;

    /**
     * @var null|string
     */
    protected $shopOutletId = null;

    /**
     * @var null|enum
     */
    protected $status = null;

    /**
     * @var null|enum
     */
    protected $type = null;

    /**
     * @var null|enum
     */
    protected $visibility = null;

    /**
     * @var null|string
     */
    protected $workingTime = null;

    /**
     * @var null|AddressOutlet
     */
    protected $address = null;
    protected $emails = null;
    protected $phones = null;
    protected $deliveryRules = null;

    /**
     * Retrieve the id property
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the id property
     *
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsBookNow()
    {
        return $this->isBookNow;
    }

    /**
     * @return bool|null
     */
    public function getIsMain()
    {
        return $this->isMain;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return null|string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @return null|string
     */
    public function getShopOutletId()
    {
        return $this->shopOutletId;
    }

    /**
     * @return null|enum
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return null|enum
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return null|enum
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * @return null|string
     */
    public function getWorkingTime()
    {
        return $this->workingTime;
    }

    /**
     * @return AddressOutlet|null
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return DeliveryRules|null
     */
    public function getDeliveryRules()
    {
        return $this->deliveryRules;
    }

    /**
     * @return StringCollection|null
     */
    public function getEmails()
    {
        return $this->emails;
    }

    /**
     * @return StringCollection|null
     */
    public function getPhones()
    {
        return $this->phones;
    }
}
