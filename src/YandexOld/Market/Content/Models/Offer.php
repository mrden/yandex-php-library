<?php

namespace YandexOld\Market\Content\Models;

use YandexOld\Common\Model;

class Offer extends Model
{
    protected $id = null;

    protected $modelId = null;

    protected $categoryId = null;

    protected $vendorId = null;

    protected $cpa = null;

    protected $name = null;

    protected $variationsCount = null;

    protected $description = null;

    protected $shopInfo = null;

    protected $onStock = null;

    protected $warranty = null;

    protected $url = null;

    protected $price = null;

    protected $phone = null;

    protected $delivery = null;

    protected $photos = null;

    protected $previewPhotos = null;

    protected $bigPhoto = null;

    protected $outlet = null;

    protected $outletCount = null;

    protected $warning = null;

    protected $age = null;

    protected $vendor = null;

    protected $filters = null;

    protected $mappingClasses = [
        'shopInfo' => 'YandexOld\Market\Content\Models\ShopInfo',
        'photos' => 'YandexOld\Market\Content\Models\OfferPhotos',
        'previewPhotos' => 'YandexOld\Market\Content\Models\OfferPhotos',
        'bigPhoto' => 'YandexOld\Market\Content\Models\OfferPhoto',
        'price' => 'YandexOld\Market\Content\Models\Base\Price',
        'phone' => 'YandexOld\Market\Content\Models\Phone',
        'delivery' => 'YandexOld\Market\Content\Models\Delivery',
        'outlet' => 'YandexOld\Market\Content\Models\Outlet',
        'filters' => 'YandexOld\Market\Content\Models\Filters',
        'vendor' =>  'YandexOld\Market\Content\Models\Vendor'
    ];

    protected $propNameMap = [
        'offerId' => 'id',
        'variations' => 'variationsCount'
    ];

    /**
     * Retrieve the id property
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Retrieve the modelId property
     *
     * @return int|null
     */
    public function getModelId()
    {
        return $this->modelId;
    }

    /**
     * Retrieve the categoryId property
     *
     * @return int|null
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Retrieve the vemdorId property
     *
     * @return int|null
     */
    public function getVendorId()
    {
        return $this->vendorId;
    }

    /**
     * Retrieve the cpa property
     *
     * @return int|null
     */
    public function getCpa()
    {
        return $this->cpa;
    }

    /**
     * Retrieve the name property
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Retrieve the variationsCount property
     *
     * @return int|null
     */
    public function getVariationsCount()
    {
        return $this->variationsCount;
    }

    /**
     * Retrieve the description property
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Retrieve the shopInfo property
     *
     * @return ShopInfo|null
     */
    public function getShopInfo()
    {
        return $this->shopInfo;
    }

    /**
     * Retrieve the onStock property
     *
     * @return int|null
     */
    public function getOnStock()
    {
        return $this->onStock;
    }

    /**
     * Retrieve the warranty property
     *
     * @return int|null
     */
    public function getWarranty()
    {
        return $this->warranty;
    }

    /**
     * Retrieve the url property
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Retrieve the price property
     *
     * @return Price|null
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Retrieve the phone property
     *
     * @return Phone|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Retrieve the delivery property
     *
     * @return Delivery|null
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * Retrieve the photos property
     *
     * @return Photos|null
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * Retrieve the previewPhotos property
     *
     * @return Photos|null
     */
    public function getPreviewPhotos()
    {
        return $this->previewPhotos;
    }

    /**
     * Retrieve the bigPhoto property
     *
     * @return Photo|null
     */
    public function getBigPhoto()
    {
        return $this->bigPhoto;
    }

    /**
     * Retrieve the outlet property
     *
     * @return Outlet|null
     */
    public function getOutlet()
    {
        return $this->outlet;
    }

    /**
     * Retrieve the outletCount property
     *
     * @return int|null
     */
    public function getOutletCount()
    {
        return $this->outletCount;
    }

    /**
     * Retrieve the warning property
     *
     * @return string|null
     */
    public function getWarning()
    {
        return $this->warning;
    }

    /**
     * Retrieve the age property
     *
     * @return string|null
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Retrieve the vendor property
     *
     * @return Vendor|null
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Retrieve the filters property
     *
     * @note Property available during /model/{model_id} request.
     *
     * @return Filters|null
     */
    public function getFilters()
    {
        return $this->filters;
    }
}
