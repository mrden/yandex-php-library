<?php

namespace YandexOld\Market\Content\Models;

use YandexOld\Market\Content\Models\Base\PagedModel;

class ResponseModelReviewsGet extends PagedModel
{
    protected $mappingClasses = [
        'items' => 'YandexOld\Market\Content\Models\Reviews'
    ];

    protected $propNameMap = [
        'reviews' => 'items'
    ];

    /**
     * Constructor
     *
     * @param array $data
     */
    public function __construct($data = array())
    {
        parent::__construct($data['modelReviews']);
    }
}
