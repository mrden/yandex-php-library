<?php

namespace YandexOld\Metrica\Stat\Models;

use YandexOld\Metrica\Stat\Models\Dimension;
use YandexOld\Metrica\Stat\Models\ComparisonMetrics;
use YandexOld\Common\Model;

class DrillDownComparisonItems extends Model
{

    protected $dimension = null;

    protected $metrics = null;

    protected $expand = null;

    protected $mappingClasses = [
        'dimension' => 'YandexOld\Metrica\Stat\Models\Dimension',
        'metrics' => 'YandexOld\Metrica\Stat\Models\ComparisonMetrics'
    ];

    protected $propNameMap = [];

    /**
     * Retrieve the dimension property
     *
     * @return Dimension|null
     */
    public function getDimension()
    {
        return $this->dimension;
    }

    /**
     * Set the dimension property
     *
     * @param Dimension $dimension
     * @return $this
     */
    public function setDimension($dimension)
    {
        $this->dimension = $dimension;
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

    /**
     * Retrieve the expand property
     *
     * @return bool|null
     */
    public function getExpand()
    {
        return $this->expand;
    }

    /**
     * Set the expand property
     *
     * @param bool $expand
     * @return $this
     */
    public function setExpand($expand)
    {
        $this->expand = $expand;
        return $this;
    }
}
