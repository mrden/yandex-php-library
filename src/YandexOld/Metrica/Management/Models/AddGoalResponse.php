<?php

namespace YandexOld\Metrica\Management\Models;

use YandexOld\Metrica\Management\Models\Goal;
use YandexOld\Common\Model;

class AddGoalResponse extends Model
{

    protected $goal = null;

    protected $mappingClasses = [
        'goal' => 'YandexOld\Metrica\Management\Models\Goal'
    ];

    protected $propNameMap = [];

    /**
     * Retrieve the goal property
     *
     * @return Goal|null
     */
    public function getGoal()
    {
        return $this->goal;
    }

    /**
     * Set the goal property
     *
     * @param Goal $goal
     * @return $this
     */
    public function setGoal($goal)
    {
        $this->goal = $goal;
        return $this;
    }
}
