<?php

namespace YandexOld\Market\Content\Models;

use YandexOld\Common\Model;

class ResponseCategoryGet extends Model
{
    protected $category = null;

    protected $mappingClasses = [
        'category' => 'YandexOld\Market\Content\Models\Category'
    ];

    /**
     * Retrieve the categories property
     *
     * @return Categories|null
     */
    public function getCategory()
    {
        return $this->category;
    }
}
