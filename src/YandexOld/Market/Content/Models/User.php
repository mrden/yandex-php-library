<?php

namespace YandexOld\Market\Content\Models;

use YandexOld\Common\Model;

class User extends Model
{
    protected $id = null;

    protected $name = null;

    /**
     * Retrieve the id property
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
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
}
