<?php

namespace YandexOld\Metrica\Stat\Models;

use YandexOld\Metrica\Stat\Models\Query;
use YandexOld\Metrica\Stat\Models\DrillDownData;
use YandexOld\Common\Model;

class DrillDown extends Model
{

    protected $totalRows = null;

    protected $sampled = null;

    protected $sampleShare = null;

    protected $sampleSize = null;

    protected $sampleSpace = null;

    protected $dataLag = null;

    protected $query = null;

    protected $totals = null;

    protected $min = null;

    protected $max = null;

    protected $data = null;

    protected $mappingClasses = [
        'query' => 'YandexOld\Metrica\Stat\Models\Query',
        'data' => 'YandexOld\Metrica\Stat\Models\DrillDownData'
    ];

    protected $propNameMap = [
        'total_rows' => 'totalRows',
        'sample_share' => 'sampleShare',
        'sample_size' => 'sampleSize',
        'sample_space' => 'sampleSpace',
        'data_lag' => 'dataLag'
    ];

    /**
     * Retrieve the totalRows property
     *
     * @return int|null
     */
    public function getTotalRows()
    {
        return $this->totalRows;
    }

    /**
     * Set the totalRows property
     *
     * @param int $totalRows
     * @return $this
     */
    public function setTotalRows($totalRows)
    {
        $this->totalRows = $totalRows;
        return $this;
    }

    /**
     * Retrieve the sampled property
     *
     * @return bool|null
     */
    public function getSampled()
    {
        return $this->sampled;
    }

    /**
     * Set the sampled property
     *
     * @param bool $sampled
     * @return $this
     */
    public function setSampled($sampled)
    {
        $this->sampled = $sampled;
        return $this;
    }

    /**
     * Retrieve the sampleShare property
     *
     * @return bool|null
     */
    public function getSampleShare()
    {
        return $this->sampleShare;
    }

    /**
     * Set the sampleShare property
     *
     * @param bool $sampleShare
     * @return $this
     */
    public function setSampleShare($sampleShare)
    {
        $this->sampleShare = $sampleShare;
        return $this;
    }

    /**
     * Retrieve the sampleSize property
     *
     * @return int|null
     */
    public function getSampleSize()
    {
        return $this->sampleSize;
    }

    /**
     * Set the sampleSize property
     *
     * @param int $sampleSize
     * @return $this
     */
    public function setSampleSize($sampleSize)
    {
        $this->sampleSize = $sampleSize;
        return $this;
    }

    /**
     * Retrieve the sampleSpace property
     *
     * @return int|null
     */
    public function getSampleSpace()
    {
        return $this->sampleSpace;
    }

    /**
     * Set the sampleSpace property
     *
     * @param int $sampleSpace
     * @return $this
     */
    public function setSampleSpace($sampleSpace)
    {
        $this->sampleSpace = $sampleSpace;
        return $this;
    }

    /**
     * Retrieve the dataLag property
     *
     * @return int|null
     */
    public function getDataLag()
    {
        return $this->dataLag;
    }

    /**
     * Set the dataLag property
     *
     * @param int $dataLag
     * @return $this
     */
    public function setDataLag($dataLag)
    {
        $this->dataLag = $dataLag;
        return $this;
    }

    /**
     * Retrieve the query property
     *
     * @return Query|null
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Set the query property
     *
     * @param Query $query
     * @return $this
     */
    public function setQuery($query)
    {
        $this->query = $query;
        return $this;
    }

    /**
     * Retrieve the totals property
     *
     * @return array|null
     */
    public function getTotals()
    {
        return $this->totals;
    }

    /**
     * Set the totals property
     *
     * @param array $totals
     * @return $this
     */
    public function setTotals($totals)
    {
        $this->totals = $totals;
        return $this;
    }

    /**
     * Retrieve the min property
     *
     * @return array|null
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Set the min property
     *
     * @param array $min
     * @return $this
     */
    public function setMin($min)
    {
        $this->min = $min;
        return $this;
    }

    /**
     * Retrieve the max property
     *
     * @return array|null
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Set the max property
     *
     * @param array $max
     * @return $this
     */
    public function setMax($max)
    {
        $this->max = $max;
        return $this;
    }

    /**
     * Retrieve the data property
     *
     * @return DrillDownData|null
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set the data property
     *
     * @param DrillDownData $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
}
