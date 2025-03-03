<?php

namespace YandexOld\Market\Content\Models;

use YandexOld\Common\Model;

class Facts extends Model
{
    protected $pros = null;

    protected $contras = null;

    protected $mappingClasses = [
        'pros' => 'YandexOld\Market\Content\Models\Pros',
        'contras' => 'YandexOld\Market\Content\Models\Contras'
    ];

    protected $propNameMap = [
        'pro' => 'pros',
        'contra' => 'contras'
    ];

    /**
     * Retrieve the pros property
     *
     * @return Pros|null
     */
    public function getPros()
    {
        return $this->pros;
    }

    /**
     * Retrieve the contras property
     *
     * @return Contras|null
     */
    public function getContras()
    {
        return $this->contras;
    }
}
