<?php

namespace YandexOld\Market\Content\Models;

use YandexOld\Common\Model;

class Review extends Model
{
    protected $url = null;

    protected $title = null;

    protected $favIcon = null;

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
     * Retrieve the title property
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Retrieve the favIcon property
     *
     * @return string|null
     */
    public function getFavIcon()
    {
        return $this->favIcon;
    }
}
