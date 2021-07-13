<?php

namespace YandexOld\Market\Content\Models;

use YandexOld\Common\Model;
use YandexOld\Market\Content\Models\Base\MarketModel;

class ResponseModelGet extends Model
{
    protected $model = null;

    protected $mappingClasses = [
        'model' => 'YandexOld\Market\Content\Models\Base\MarketModel'
    ];

    /**
     * Constructor
     *
     * @param array $data
     */
    public function __construct($data = array())
    {
        foreach ($this->mappingClasses as $propName => &$mappingClassName) {
            if ($mappingClassName == 'YandexOld\Market\Content\Models\Base\MarketModel') {
                $realMappingClassName = MarketModel::getInstanceClassName($data[$propName]);
                $mappingClassName = $realMappingClassName;
            }
        }
        parent::__construct($data);
    }

    /**
     * Retrieve the model property
     *
     * @return ProductModel|null
     */
    public function getModel()
    {
        return $this->model;
    }
}
