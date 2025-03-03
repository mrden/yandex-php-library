<?php

namespace YandexOld\Market\Content\Models;

use YandexOld\Common\Model;

class ResponseModelInfoGet extends Model
{
    protected $time = null;

    protected $model = null;

    protected $mappingClasses = [
        'model' => 'YandexOld\Market\Content\Models\ModelInfo'
    ];

    /**
     * Retrieve the model property
     *
     * @return ModelInfo|null
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Retrieve the time property
     *
     * @return int|null
     */
    public function getTime()
    {
        return $this->time;
    }
}
