<?php

namespace YandexOld\Metrica\Stat\Models;

use YandexOld\Metrica\Stat\Models\Dimensions;
use YandexOld\Metrica\Stat\Models\ComparisonMetrics;
use YandexOld\Common\Model;

class ComparisonItems extends Model
{

    protected $dimensions = null;

    protected $metrics = null;

    protected $mappingClasses = [
        'dimensions' => 'YandexOld\Metrica\Stat\Models\Dimensions',
        'metrics' => 'YandexOld\Metrica\Stat\Models\ComparisonMetrics'
    ];

    protected $propNameMap = [];

    /**
     * Retrieve the dimensions property
     *
     * @return Dimensions|null
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * Set the dimensions property
     *
     * @param Dimensions $dimensions
     * @return $this
     */
    public function setDimensions($dimensions)
    {
        $this->dimensions = $dimensions;
        return $this;
    }

    /**
     * Retrieve the metrics property
     *
     * @return ComparisonMetrics|null
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * Set the metrics property
     *
     * @param ComparisonMetrics $metrics
     * @return $this
     */
    public function setMetrics($metrics)
    {
        $this->metrics = $metrics;
        return $this;
    }
}
